<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Models\CreditTransaction;
use App\Traits\ApiResponseTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WebhookController extends Controller
{
    use ApiResponseTrait;

    public function handle(Request $request)
    {
        $payload = $request->all();

        $data = $payload['data'];
        if (($data['type'] ?? null) == 'Inwards') {

            $idempotencyKey = $data['sessionId'] ?? null;

            if (!$idempotencyKey) {
                return $this->error('Missing idempotency key', 400);
            }

            try {
                DB::beginTransaction();

                $existing = DB::table('webhook_logs')
                    ->where('idempotency_key', $idempotencyKey)
                    ->lockForUpdate()
                    ->first();

                if ($existing) {
                    DB::commit();

                    return $this->error('Duplicate webhook received', 409);
                }

                DB::table('webhook_logs')->insert([
                    'event_type' => $eventType,
                    'idempotency_key' => $idempotencyKey,
                    'payload' => json_encode($payload),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);

                CreditTransaction::create([
                    'reference' => $data['sessionId'],
                    'amount' => $data['amount'],
                    'account_number' => $data['creditAccountNumber'],
                    'sender_name' => $data['debitAccountName'],
                    'status' => $data['status'],
                    'payload' => json_encode($data),
                ]);

                DB::table('webhook_logs')
                ->where('idempotency_key', $idempotencyKey)
                ->update([
                    'processed_at' => now()
                ]);

                DB::commit();

                return $this->success(null, 'Webhook received successfully', 200);
                
            } catch (\Exception $e) {
                DB::rollBack();
                return $this->error('Failed to process webhook', 500);
            }

        }
        
    }

}

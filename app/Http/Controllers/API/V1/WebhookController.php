<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Models\CreditTransaction;
use App\Traits\ApiResponseTrait;
use Illuminate\Http\Request;

class WebhookController extends Controller
{
    use ApiResponseTrait;
    
    public function handle(Request $request)
    {
        $payload = $request->all();

        $data = $payload['data'];
        if (($data['type'] ?? null) == 'Inwards') {

            CreditTransaction::create([
                'reference' => $data['sessionId'],
                'amount' => $data['amount'],
                'account_number' => $data['creditAccountNumber'],
                'sender_name' => $data['debitAccountName'],
                'status' => $data['status'],
                'payload' => json_encode($data),
            ]);
        }

        return $this->success(null, 'Webhook received successfully', 200);
    }

    
}

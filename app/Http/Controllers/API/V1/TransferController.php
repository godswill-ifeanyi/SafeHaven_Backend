<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Services\SafeHavenTransferService;
use App\Traits\ApiResponseTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class TransferController extends Controller
{
    use ApiResponseTrait;

     /**
     * Get list of banks for transfers
     */
    public function get_banks()
    {
        // Get banks from SafeHavenTransferService
        $response = app()->make('App\Services\SafeHavenTransferService')->getBanks();

        if (isset($response['data'])) {
            return $this->success($response['data'], 'Banks fetched successfully', 200);
        } else {
            return $this->error($response['message'] ?? 'Failed to fetch banks', $response['statusCode'] ?? 400);
        }
    }

    public function name_enquiry(Request $request)
     {
        $request->validate([
            'accountNumber' => 'required|digits_between:10,12',
            'bankCode' => 'required|string',
        ]);

        // Get name enquiry from SafeHavenTransferService
        $response = app()->make('App\Services\SafeHavenTransferService')->nameEnquiry($request->accountNumber, $request->bankCode);

        if (isset($response['data'])) {
            return $this->success($response['data'], 'Name fetched successfully', 200);
        } else {
            return $this->error($response['message'] ?? 'Failed to name', $response['statusCode'] ?? 400);
        }
    }

    /* public function transfer(Request $request)
    {
        $request->validate([
            'debitAccountNumber' => 'required|digits_between:10,12',
            'creditAccountNumber' => 'required|digits_between:10,12',
            'creditBankCode' => 'required|string',
            'amount' => 'required|numeric|min:1',
            'narration' => 'nullable|string',
            'sessionId' => 'required|string',
        ]);

        // Perform transfer using SafeHavenTransferService
        $response = app()->make('App\Services\SafeHavenTransferService')->transfer($request->all());

        if (isset($response['data'])) {
            return $this->success($response['data'], 'Transfer successful', 201);
        } else {
            return $this->error($response['message'] ?? 'Failed to transfer', $response['statusCode'] ?? 400);
        }
    } */

    public function initiate(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'debitAccountNumber' => 'required|digits_between:10,12',
            'creditAccountNumber' => 'required|digits_between:10,12',
            'creditBankCode' => 'required|string',
            'amount' => 'required|numeric|min:1',
            'narration' => 'nullable|string',
            'sessionId' => 'required|string',
        ]);

        /**
         * Generate OTP
         */
        $otp = random_int(100000, 999999);

        /**
         * Unique transfer token
         */
        $transferToken = Str::uuid()->toString();

        /**
         * Store pending transfer for 10 mins
         */
        Cache::put(
            "pending_transfer_{$transferToken}",
            [
                'otp' => $otp,
                'payload' => $validated,
            ],
            now()->addMinutes(10)
        );

        /**
         * Send OTP email
         */
        Mail::raw(
            "Your transfer OTP is: {$otp} expires in 10 minutes",
            function ($message) use ($validated) {
                $message->to($validated['email'])
                    ->subject('Transfer OTP');
            }
        );

        return $this->success(
            ['transferToken' => $transferToken],
            'OTP sent to email. Use the transfer token and OTP to verify and complete the transfer.',
            200
        );
    }

    public function verifyOtpAndTransfer(
    Request $request,
    SafeHavenTransferService $transferService
    ) {
        $validated = $request->validate([
            'transferToken' => 'required|string',
            'otp' => 'required|digits:6',
        ]);

        /**
         * Retrieve pending transfer
         */
        $pendingTransfer = Cache::get(
            "pending_transfer_{$validated['transferToken']}"
        );

        if (!$pendingTransfer) {
            return $this->error('Transfer session expired', 400);
        }

        /**
         * Verify OTP
         */
        if ($pendingTransfer['otp'] != $validated['otp']) {

            return $this->error('Invalid OTP', 400);
        }

        /**
         * Execute transfer
         */
        $response = $transferService->transfer(
            $pendingTransfer['payload']
        );

        /**
         * Remove cache after successful use
         */
        Cache::forget(
            "pending_transfer_{$validated['transferToken']}"
        );

        if (empty($response['data'])) {

            return $this->error($response['message'] ?? 'Transfer failed', $response['statusCode'] ?? 400);
        }

        return $this->success($response['data'], 'Transfer successful', 200);
    }

    public function transfer_status(Request $request)
    {
        // SInce the service makes use of either paymentReference or sessionId, check for the provided one
        $sessionId = $request->route('session_id');

        // Get transfer status from SafeHavenTransferService
        $response = app()->make('App\Services\SafeHavenTransferService')->transferStatus($sessionId);

        if (isset($response['data'])) {
            return $this->success(["paymentStatus" => $response['data']['status']], 'Transfer status fetched successfully', 200);
        } else {
            return $this->error($response['message'] ?? 'Failed to fetch transfer status', $response['statusCode'] ?? 400);
        }
    }

    public function get_transfers(Request $request)
    {
        $query = $request->only(['fromDate', 'toDate', 'status']);

        // Get transfers from SafeHavenTransferService
        $response = app()->make('App\Services\SafeHavenTransferService')->getTransfers($query);

        if (isset($response['data'])) {
            return $this->success($response['data'], 'Transfers fetched successfully', 200);
        } else {
            return $this->error($response['message'] ?? 'Failed to fetch transfers', $response['statusCode'] ?? 400);
        }
    }
}

<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Traits\ApiResponseTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

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

    public function transfer(Request $request)
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
    }
}

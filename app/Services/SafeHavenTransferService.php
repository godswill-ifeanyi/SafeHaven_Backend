<?php

namespace App\Services;

use App\Services\SafeHavenTokenService;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class SafeHavenTransferService
{
    protected string $baseUrl;
    protected string $clientId;
    protected string $primaryAccount;
    protected SafeHavenTokenService $tokenService;

    public function __construct(SafeHavenTokenService $tokenService)
    {
        $this->baseUrl = config('services.safehaven.base_url');
        $this->clientId = config('services.safehaven.client_id');
        $this->primaryAccount = config('services.safehaven.primary_account_number');
        $this->tokenService = $tokenService;
    }

    private function client()
    {
        return Http::withToken($this->tokenService->getAccessToken())
            ->withHeaders([
                'ClientID' => $this->clientId,
            ])
            ->acceptJson()
            ->contentType('application/json');
    }

    /**
     * 1️⃣ Get Banks
     */
    public function getBanks()
    {
        return Cache::remember('safehaven_banks', now()->addHours(24), function () {

            $response = $this->client()->get("{$this->baseUrl}/transfers/banks");

            if (!$response->ok()) {
                throw new \Exception('Failed to fetch banks');
            }

            return $response->json();
        });
    }

    /**
     * 2️⃣ Name Enquiry
     */
    public function nameEnquiry(string $accountNumber, string $bankCode)
    {
        $response = $this->client()->post("{$this->baseUrl}/transfers/name-enquiry", [
            "accountNumber" => $accountNumber,
            "bankCode" => $bankCode,
        ]);

        return $response->json();
        // contains sessionId
    }

    /**
     * 3️⃣ Transfer
     */
    public function transfer(array $data)
    {
        $response = $this->client()->post("{$this->baseUrl}/transfers", [
            "amount" => $data['amount'],
            "debitAccountNumber" => $data['debitAccountNumber'],
            "beneficiaryAccountNumber" => $data['creditAccountNumber'],
            "beneficiaryBankCode" => $data['creditankCode'],
            "narration" => $data['narration'] ?? 'Transfer',
            "saveBeneficiary" => false,
            "nameEnquiryReference" => $data['sessionId'], // 🔑 from name enquiry
            "paymentReference" => uniqid('trx_', true),
        ]);


            return $response->json();
    }

    /**
     * 4️⃣ Transfer Status
     */
    public function transferStatus(string $sessionId)
    {

        $response = $this->client()->post("{$this->baseUrl}/transfers/status", [
            "sessionId" => $sessionId,
        ]);

        return $response->json();
    }

    /**
     * 5️⃣ Get Transfers (History)
     */
    public function getTransfers(array $query = [])
    {
        $response = $this->client()->get("{$this->baseUrl}/transfers", $query);

        return $response->json();
    }
}

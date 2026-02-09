<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class SafeHavenService
{
    protected string $baseUrl;
    protected string $clientId;
    protected string $primaryAccountNumber;
    protected SafeHavenTokenService $tokenService;

    public function __construct(SafeHavenTokenService $tokenService)
    {
        $this->baseUrl = config('services.safehaven.base_url');
        $this->clientId = config('services.safehaven.client_id');
        $this->primaryAccountNumber = config('services.safehaven.primary_account_number');
        $this->tokenService = $tokenService;
    }

    protected function client()
    {
        return Http::withToken($this->tokenService->getAccessToken())
            ->acceptJson();
    }

    protected function refreshClient()
    {
        $this->tokenService->refreshToken();
        return $this->client();
    }

    /**
     * Initiate BVN verification
     *
     * @param string $bvn
     * @return string identityId
     * @throws \Exception
     */
    public function initiateBVNVerification(string $nin): string
    {
        $response = $this->client()->withHeaders([
            'clientId' => $this->clientId,
        ])->post(
            "{$this->baseUrl}/identity/v2",
            [
                "type" => "NIN",
                "number" => $nin,
                "debitAccountNumber" => $this->primaryAccountNumber,
            ]
        );

        if ($response->failed()) {
            throw new \Exception(
                'BVN initiation failed: ' .
                ($response->json('message') ?? 'Unknown error')
            );
        }

        $identityId = $response->json('data._id');

        if (!$identityId) {
            throw new \Exception('Safe Haven did not return identityId');
        }

        return $identityId;
    }

/**
 * Validate BVN verification using OTP
 *
 * @param string $identityId
 * @param string $otp
 * @return bool
 * @throws \Exception
 */

 /*public function validateBVNVerification(string $identityId, string $otp): bool
{
    $response = $this->client()->post(
        "{$this->baseUrl}/identity/v2/validate",
        [
            "identityId" => $identityId,
            "otp"        => $otp,
        ]
    );

    if ($response->failed()) {
        throw new \Exception(
            'BVN validation failed: ' .
            ($response->json('message') ?? 'Invalid OTP')
        );
    }

    return true;
}
 */

    public function createIndividualSubAccount(array $data): array
    {
        // Verify NIN
        $identityId = $this->initiateBVNVerification($data['nin']);

        if (!$identityId) {
            return [
                'success' => false,
                'message' => 'NIN verification failed',
            ];
        }

        $response = $this->client()->post(
            "{$this->baseUrl}/accounts/v2/subaccount",
            [
                "emailAddress"       => $data['email'],
                "phoneNumber" => $data['phone'],
                "externalReference" => uniqid('cliApp', true),
                "identityType"   => "NIN",
                "identityNumber"     => $data['nin'],
                'identityId'       => $identityId,
            ]
        );

        if ($response->failed()) {
            return [
                'success' => false,
                'status'  => $response->status(),
                'errors'  => $response->json(),
            ];
        }

        return [
            'success' => true,
            'data' => $response->json(),
        ];
    }
}

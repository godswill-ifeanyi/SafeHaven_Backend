<?php

namespace App\Services;

use App\Services\SafeHavenTokenService;
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


    /**
     * Initiate NIN verification
     *
     * @param string $nin
     * @return string identityId
     * @throws \Exception
     */
    public function initiateNINVerification(string $nin)
    {
        $token = $this->tokenService->getAccessToken();

        $response = Http::withToken($token)
            ->withHeaders([
                'ClientID' => $this->clientId,
            ])
            ->acceptJson()
            ->contentType('application/json')
            ->post("{$this->baseUrl}/identity/v2", [
                "type" => "NIN",
                "number" => $nin,
                "debitAccountNumber" => $this->primaryAccountNumber,
                "async" => false,
            ]);

        if (!$response->ok()) {
            return response()->json([
                'error' => 'Request failed',
                'status' => $response->status(),
                'safehaven_response' => $response->json(),
            ], 400);
        }

        return $response->json();
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
        $identityId = $this->initiateNINVerification($data['nin']);

        $response = $this->client()->withHeaders([
            'ClientID' => $this->clientId,
        ])->post(
            "{$this->baseUrl}/accounts/v2/subaccount",
            [
                "emailAddress" => $data['email'],
                "phoneNumber" => $data['phone'],
                "externalReference" => uniqid('cliApp', true),
                "identityType" => "NIN",
                "identityNumber" => $data['nin'],
                'identityId' => $identityId,
                "autoSweep" => true,
                "autoSweepDetails" => [
                    "schedule" => "Instant",
                    "accountNumber" => $this->primaryAccountNumber,
                ],
                'otp' => $data['otp'] ?? null, // Optional, can be used for auto-validation if provided
            ]
        );

        if (!$response->ok()) {
            return [
                'success' => false,
                'error' => $response->json('message') ?? 'Failed to create sub-account',
            ];
        }

        return [
            'success' => true,
            'data' => $response->json(),
        ];
    }
}

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


        return $response->json();
    }

/**
 * Validate NIN verification using OTP
 *
 * @param string $identityId
 * @param string $otp
 * @return bool
 * @throws \Exception
 */

    public function validateNINVerification(string $identityId, string $otp)
    {

        $token = $this->tokenService->getAccessToken();

            $response = Http::withToken($token)
                ->withHeaders([
                    'ClientID' => $this->clientId,
                ])
                ->acceptJson()
                ->contentType('application/json')
                ->post("{$this->baseUrl}/identity/v2/validate", [
                    "type" => "NIN",
                    "identityId" => $identityId,
                    "otp" => $otp,
                ]);


            return $response->json();
    }

    public function createIndividualSubAccount(array $data): array
    {
        $token = $this->tokenService->getAccessToken();

        // Verify NIN
        //$identityId = $this->initiateNINVerification("59731309476");


        $response = Http::withToken($token)
                ->withHeaders([
                    'ClientID' => $this->clientId,
                ])
                ->acceptJson()
                ->contentType('application/json')->post(
            "{$this->baseUrl}/accounts/v2/subaccount",
            [
                "emailAddress" => $data['email'],
                "phoneNumber" => $data['phone'],
                "externalReference" => uniqid('cliApp-',true),
                "identityType" => "NIN",
                "identityNumber" => $data['identityNumber'],
                'identityId' => $data['identityId'],
                "autoSweep" => true,
                "autoSweepDetails" => [
                    "schedule" => "Instant",
                    "accountNumber" => $this->primaryAccountNumber,
                ],
                'otp' => $data['otp'],
            ]
        );

        return $response->json();
    }

    public function createCorporateSubAccount(array $data): array
    {
        $token = $this->tokenService->getAccessToken();

        $response = Http::withToken($token)
            ->withHeaders([
                'ClientID' => $this->clientId,
            ])
            ->acceptJson()
            ->contentType('application/json')
            ->post("{$this->baseUrl}/accounts/v2/subaccount", [
                "emailAddress" => $data['email'],
                "phoneNumber" => $data['phone'],
                "externalReference" => uniqid('cliApp-',true),
                "identityType" => "vID",
                "identityId" => $data['identityId'],
                "companyRegistrationNumber" => $data['companyRegistrationNumber'],
                "autoSweep" => true,
                "autoSweepDetails" => [
                    "schedule" => "Instant",
                    "accountNumber" => $this->primaryAccountNumber,
                ],
            ]);

        if (!$response->ok()) {
            return [
                'status' => "error",
                'message' => $response->json('message') ?? 'Failed to create sub-account',
            ];
        }

        return [
            'status' => "success",
            'data' => $response->json(),
        ];
    }
}

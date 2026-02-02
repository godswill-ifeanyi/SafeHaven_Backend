<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class SafeHavenService
{
    protected string $baseUrl;
    protected SafeHavenTokenService $tokenService;

    public function __construct(SafeHavenTokenService $tokenService)
    {
        $this->baseUrl = config('services.safehaven.base_url');
        $this->tokenService = $tokenService;
    }

    protected function client()
    {
        return Http::withToken($this->tokenService->getAccessToken())
            ->acceptJson();
    }

    public function createIndividualSubAccount(array $data): array
    {
        $response = $this->client()->post(
            "{$this->baseUrl}/accounts/v2/subaccount",
            [
                "firstName"   => $data['first_name'],
                "lastName"    => $data['last_name'],
                "email"       => $data['email'],
                "phoneNumber" => $data['phone'],
                "dob"         => $data['dob'],
                "address"     => $data['address'],
                "city"        => $data['city'],
                "state"       => $data['state'],
                "country"     => "NG",
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

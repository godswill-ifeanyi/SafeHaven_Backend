<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class SafeHavenAccountService
{
    protected string $baseUrl;
    protected string $clientId;
    protected SafeHavenTokenService $tokenService;

    public function __construct(SafeHavenTokenService $tokenService)
    {
        $this->baseUrl = config('services.safehaven.base_url');
        $this->clientId = config('services.safehaven.client_id');
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
     * Get all sub-accounts
     */
    public function getAllSubAccounts(array $params = [])
    {
        $query = [
            'page' => $params['page'] ?? 0,
            'limit' => $params['limit'] ?? 100,
            'isSubAccount' => true, 
        ];

        $response = $this->client()->get(
            "{$this->baseUrl}/accounts",
            $query
        );

        /* if (!$response->ok()) {
            throw new \Exception(
                $response->json('message') ?? 'Failed to fetch accounts'
            );
        } */

        return $response->json();
    }

    /**
     * Get single sub-account
     */
    public function getSubAccount(string $accountId)
    {
        $response = $this->client()
            ->get("{$this->baseUrl}/accounts/{$accountId}");

        /* if (!$response->ok()) {
            throw new \Exception(
                $response->json('message') ?? 'Failed to fetch account'
            );
        } */

        return $response->json();
    }

}

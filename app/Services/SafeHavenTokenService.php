<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

class SafeHavenTokenService
{
    protected SafeHavenOAuthService $oauth;

    public function __construct(SafeHavenOAuthService $oauth)
    {
        $this->oauth = $oauth;
    }

    public function getAccessToken(): string
    {
        return Cache::remember(
            /*
            'safehaven_access_token',
            config('services.safehaven.token_ttl', 3600) - 60,
            function () {
                return $this->requestNewToken();
            } 
             */
            'safehaven_access_token',
            55 * 60,
            function () {
                return $this->requestNewToken();
            }
        );
    }

    protected function requestNewToken(): string
    {
        //$assertion = $this->oauth->generateClientAssertion();
        $assertion = config('services.safehaven.access_token');
        $client_id = config('services.safehaven.client_id');

        $response = Http::asForm()->post(
            config('services.safehaven.base_url') . '/oauth2/token',
            [
                'grant_type' => 'client_credentials',
                'client_id' => $client_id,
                'client_assertion' => $assertion,
                'client_assertion_type' =>
                    'urn:ietf:params:oauth:client-assertion-type:jwt-bearer',
            ]
        );

        if ($response->failed()) {
            throw new \Exception(
                'SafeHaven OAuth failed: ' . $response->body()
            );
        }

        return $response->json('access_token');
    }
}

<?php

namespace App\Services;

use App\Services\SafeHavenOAuthService;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class SafeHavenTokenService
{
    protected SafeHavenOAuthService $oauth;
    protected $client_id;

    public function __construct(SafeHavenOAuthService $oauth)
    {
        $this->oauth = $oauth;
        $this->client_id = config('services.safehaven.client_id');
    }

    public function getAccessToken(): string
    {
        return Cache::remember('safehaven_access_token', 300, function () {
            return $this->requestNewToken();
        });
    }

    public function refreshToken(): string
    {
        Cache::forget('safehaven_access_token');
        return $this->getAccessToken();
    }

    protected function requestNewToken(): string
    {
        $assertion = $this->oauth->generateClientAssertion();

        $response = Http::asForm()->post(
            config('services.safehaven.base_url') . '/oauth2/token',
            [
                'grant_type' => 'client_credentials',
                'client_assertion_type' =>
                    'urn:ietf:params:oauth:client-assertion-type:jwt-bearer',
                'client_assertion' => $assertion,
                'client_id' => $this->client_id,
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

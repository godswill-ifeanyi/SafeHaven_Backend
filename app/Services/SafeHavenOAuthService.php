<?php

namespace App\Services;

use Firebase\JWT\JWT;
use Illuminate\Support\Str;

class SafeHavenOAuthService
{
    public function generateClientAssertion(): string
    {
        $privateKey = file_get_contents(
            config('services.safehaven.private_key_path')
        );

        $now = time();

        $payload = [
            'iss' => config('services.safehaven.client_id'),
            'sub' => config('services.safehaven.client_id'),
            'aud' => config('services.safehaven.base_url') . '/oauth/token',
            'jti' => (string) Str::uuid(),
            'iat' => $now,
            'exp' => $now + 300, // 5 minutes
        ];

        return JWT::encode($payload, $privateKey, 'RS256');
    }
}

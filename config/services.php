<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'safehaven' => [
        'primary_account_number' => env('SAFEHAVEN_PRIMARY_ACCOUNT_NUMBER'),
        'base_url' => env('SAFEHAVEN_BASE_URL', 'https://api.sandbox.safehavenmfb.com'),
        'client_id' => env('SAFEHAVEN_CLIENT_ID'),
        'access_token' => env('SAFEHAVEN_ACCESS_TOKEN'),
        'private_key_path' => env('SAFEHAVEN_PRIVATE_KEY_PATH'),
        'token_ttl' => env('SAFEHAVEN_TOKEN_TTL', 3600),
    ],

    'postmark' => [
        'key' => env('POSTMARK_API_KEY'),
    ],

    'resend' => [
        'key' => env('RESEND_API_KEY'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'slack' => [
        'notifications' => [
            'bot_user_oauth_token' => env('SLACK_BOT_USER_OAUTH_TOKEN'),
            'channel' => env('SLACK_BOT_USER_DEFAULT_CHANNEL'),
        ],
    ],

];

<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TransferController extends Controller
{
    public function get_banks()
    {
        $token = app()->make('App\Services\SafeHavenTokenService')->getAccessToken();

        $response = Http::withToken($token)
        ->withHeaders([
            'ClientID' => config('services.safehaven.client_id'),
        ])
        ->acceptJson()
        ->contentType('application/json')
        ->get(config('services.safehaven.base_url') . '/transfers/banks');

        if (!$response->successful()) {
            return response()->json([
                "response" => $response->json(),
            ]);
        }

        return response()->json($response->json());
    }
}

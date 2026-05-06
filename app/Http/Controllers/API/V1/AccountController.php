<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\SafeHavenAccountService;

class AccountController extends Controller
{
    protected SafeHavenAccountService $service;

    public function __construct(SafeHavenAccountService $service)
    {
        $this->service = $service;
    }

    /**
     * GET /accounts
     * Fetch all sub-accounts
     */
    public function index(Request $request)
    {
        $validated = $request->validate([
            'page'  => 'sometimes|integer|min:0',
            'limit' => 'sometimes|integer|min:1|max:100',
        ]);

        try {
            $response = $this->service->getAllSubAccounts($validated);

            if (isset($response['data'])) {
                return $this->success($response['data'], $response['message'] ?? 'Accounts fetched successfully', 200);
            } else {
                return $this->error($response['message'] ?? 'Failed to fetch accounts', $response['statusCode'] ?? 400);
            }

        } catch (\Throwable $e) {
            return $this->error($e->getMessage() ?? 'Failed to fetch accounts', 500);
        }
    }

    /**
     * GET /accounts/{id}
     * Fetch a single sub-account
     */
    public function show(string $id)
    {
        try {
            $response = $this->service->getSubAccount($id);

            if (isset($response['data'])) {
                return $this->success($response['data'], $response['message'] ?? 'Account fetched successfully', 200);
            } else {
                return $this->error($response['message'] ?? 'Failed to fetch account', $response['statusCode'] ?? 400);
            }

        } catch (\Throwable $e) {
            return $this->error($e->getMessage() ?? 'Failed to fetch account', 500);
        }
    }

}

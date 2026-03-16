<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Services\SafeHavenService;
use App\Traits\ApiResponseTrait;
use Illuminate\Http\Request;

class UserController extends Controller
{
    use ApiResponseTrait;
    
    public function create(Request $request, SafeHavenService $safeHaven)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'phone' => 'required|digits:11',
            'identityNumber' => 'required|digits:11',
            'identityId' => 'required|string',
            'otp' => 'required|digits:6',
            'companyRegistrationNumber' => 'nullable|string',
        ]);

        $response = $safeHaven->createIndividualSubAccount($validated);

        if (isset($response['data'])) {
            return $this->success($response['data'], $response['message'] ?? 'Account created successfully', 201);
        } else {
            return $this->error($response['message'] ?? 'Failed to create account', $response['statusCode'] ?? 400);
        }
    }

    public function create_corporate(Request $request, SafeHavenService $safeHaven) {
        $validated = $request->validate([
            'identityId' => 'required|string',
            'companyRegistrationNumber' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|digits:11',
        ]);

        $response = $safeHaven->createCorporateSubAccount($validated);

        return response()->json(
            $response,
            $response['status'] === 'success' ? 201 : ($response['data']['statusCode'] ?? 422)
        );
    }

}

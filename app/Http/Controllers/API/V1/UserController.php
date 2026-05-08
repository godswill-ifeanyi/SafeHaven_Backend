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
            'phone' => 'required|string',
            'identityNumber' => 'required|digits:11',
            'identityId' => 'required|string',
            'otp' => 'required|digits:6',
            'companyRegistrationNumber' => 'nullable|string',
        ]);

        // Check if it's a corporate account creation (if companyRegistrationNumber is provided)
        if (isset($validated['companyRegistrationNumber'])) {

            try {
                // Validate OTP first before proceeding with corporate account creation
                $otpValid = $safeHaven->validateNINVerification($validated['identityId'], $validated['otp']);

                if (empty($otpValid['data'])) {
                    return $this->error($otpValid['message'] ?? 'Failed to validate NIN OTP', $otpValid['statusCode'] ?? 400);
                }

                $response = $safeHaven->createCorporateSubAccount($validated);

                if (isset($response['data'])) {
                    return $this->success($response['data'], $response['message'] ?? 'Account created successfully', 201);
                } else {
                    return $this->error($response['message'] ?? 'Failed to create account', $response['statusCode'] ?? 400);
                }
            } catch (\Throwable $e) {
                return $this->error($e->getMessage() ?? 'Failed to create account', 500);
            }

        }

        try {
            $response = $safeHaven->createIndividualSubAccount($validated);

            if (isset($response['data'])) {
                return $this->success($response['data'], $response['message'] ?? 'Account created successfully', 201);
            } else {
                return $this->error($response['message'] ?? 'Failed to create account', $response['statusCode'] ?? 400);
            }
        } catch (\Throwable $e) {
            return $this->error($e->getMessage() ?? 'Failed to create account', 500);
        }
    }

    /* public function create_corporate(Request $request, SafeHavenService $safeHaven) {
        $validated = $request->validate([
            'identityId' => 'required|string',
            'companyRegistrationNumber' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|digits:11',
        ]);

        try {
            $response = $safeHaven->createCorporateSubAccount($validated);

            if (isset($response['data'])) {
                return $this->success($response['data'], $response['message'] ?? 'Account created successfully', 201);
            } else {
                return $this->error($response['message'] ?? 'Failed to create account', $response['statusCode'] ?? 400);
            }
        } catch (\Throwable $e) {
            return $this->error($e->getMessage() ?? 'Failed to create account', 500);
        }
    } */

}

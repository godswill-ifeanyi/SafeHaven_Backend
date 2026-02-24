<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Services\SafeHavenService;
use App\Traits\ApiResponseTrait;
use Illuminate\Http\Request;

class NINVerificationController extends Controller
{
    use ApiResponseTrait;
    /**
     * Step 1: Initiate NIN verification
     */
    public function initiate(Request $request, SafeHavenService $safeHaven)
    {
        $request->validate([
            'nin' => 'required|digits:11',
        ]);

        $response = $safeHaven->initiateNINVerification($request->nin);

        if (isset($response['data'])) {
            return $this->success($response['data'], 'NIN verification initiated successfully', 200);
        } else {
            return $this->error($response['message'] ?? 'Failed to initiate NIN verification', $response['statusCode'] ?? 400);
        }

    }

    /**
     * Step 2: Validate NIN OTP
     */
    public function validateOtp(Request $request, SafeHavenService $safeHaven)
    {
        $request->validate([
            'identityId' => 'required|string',
            'otp'         => 'required|digits:6',
        ]);

        $response = $safeHaven->validateNINVerification(
            $request->identityId,
            $request->otp
        );

        if (isset($response['data'])) {
            return $this->success($response['data'], 'NIN verification successful', 200);
        } else {
            return $this->error($response['message'] ?? 'Failed to validate NIN OTP', $response['statusCode'] ?? 400);
        }
    }
}

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

        $response = json_decode($response->getContent(), true);

        return $this->success($response["safehaven_response"]['data'], 'NIN verification initiated successfully', 200);

    }

    /**
     * Step 2: Validate BVN OTP
     */
    public function validateOtp(Request $request, SafeHavenService $safeHaven)
    {
        $request->validate([
            'identity_id' => 'required|string',
            'otp'         => 'required|digits:6',
        ]);

        $safeHaven->validateBVNVerification(
            $request->identity_id,
            $request->otp
        );

        return response()->json([
            'success' => true,
            'message' => 'BVN verified successfully',
            'identity_id' => $request->identity_id,
        ]);
    }
}

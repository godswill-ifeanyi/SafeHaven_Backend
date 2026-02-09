<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Services\SafeHavenService;
use Illuminate\Http\Request;

class BVNVerificationController extends Controller
{
    /**
     * Step 1: Initiate BVN verification
     */
    public function initiate(Request $request, SafeHavenService $safeHaven)
    {
        $request->validate([
            'nin' => 'required|digits:11',
        ]);

        $identityId = $safeHaven->initiateBVNVerification($request->nin);

        return response()->json([
            'success' => true,
            'message' => 'OTP sent to NIN-linked phone number',
            'identity_id' => $identityId,
        ]);
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

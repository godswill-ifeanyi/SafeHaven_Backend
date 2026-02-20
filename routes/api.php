<?php

use App\Http\Controllers\API\V1\NINVerificationController;
use App\Http\Controllers\API\V1\UserController;
use App\Services\SafeHavenTokenService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function() {
    // Get Access Token
    Route::get('/token', function (SafeHavenTokenService $tokenService) {
        return response()->json([
            'access_token' => $tokenService->getAccessToken(),
        ]);
    });

    // Create Account
    Route::post('/create-account', [UserController::class, 'create']);
    Route::get('/account-details/users', [UserController::class, 'index']);
    Route::get('/account-details/{account_ref}', [UserController::class, 'show']);

    Route::prefix('nin')->group(function () {
        Route::post('/initiate', [NINVerificationController::class, 'initiate']);
        Route::post('/validate', [NINVerificationController::class, 'validateOtp']);
    });

});

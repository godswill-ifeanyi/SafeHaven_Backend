<?php

use App\Http\Controllers\API\V1\AccountController;
use App\Http\Controllers\API\V1\NINVerificationController;
use App\Http\Controllers\API\V1\TransferController;
use App\Http\Controllers\API\V1\UserController;
use App\Services\SafeHavenTokenService;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function() {
     // Get Access Token
    // Route::get('/token', function (SafeHavenTokenService $tokenService) {
    //     return response()->json([
    //         'access_token' => $tokenService->getAccessToken(),
    //     ]);
    // });

    Route::prefix('nin')->group(function () {
        Route::post('/initiate', [NINVerificationController::class, 'initiate']);
        Route::post('/validate', [NINVerificationController::class, 'validateOtp']);
    });


    // Create Account
    Route::post('/create-account', [UserController::class, 'create']);
    //Route::post('/create-account/corporate', [UserController::class, 'create_corporate']);
    Route::get('/accounts', [AccountController::class, 'index']);
    Route::get('/accounts/{id}', [AccountController::class, 'show']);

    // Transfers
    Route::prefix('transfers')->group(function () {
        Route::get('/banks', [TransferController::class, 'get_banks']);
        Route::post('/name-enquiry', [TransferController::class, 'name_enquiry']);
        Route::post('/', [TransferController::class, 'transfer']);
        Route::get('/', [TransferController::class, 'get_transfers']);
        Route::get('/status/{session_id}', [TransferController::class, 'transfer_status']);

        Route::post('/initiate', [TransferController::class, 'initiate']);
        Route::post('/verify', [TransferController::class, 'verifyOtpAndTransfer']);
    });

});

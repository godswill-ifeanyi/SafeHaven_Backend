<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\V1\UserController;

Route::prefix('v1')->group(function() {
    // Create Account
    Route::post('/create-account', [UserController::class, 'create']);
    Route::get('/account-details/users', [UserController::class, 'index']);
    Route::get('/account-details/{account_ref}', [UserController::class, 'show']);
});

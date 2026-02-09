<?php

namespace App\Http\Controllers\API\V1;

use Illuminate\Http\Request;
use App\Services\SafeHavenService;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function create(Request $request, SafeHavenService $safeHaven)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'phone' => 'required|digits:11',
            'nin' => 'required|digits:11',
        ]);

        $response = $safeHaven->createIndividualSubAccount($validated);

        return response()->json(
            $response,
            $response['success'] ? 201 : 422
        );
    }

}

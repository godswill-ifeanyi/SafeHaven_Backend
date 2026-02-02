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
            'first_name' => 'required|string',
            'last_name'  => 'required|string',
            'email'      => 'required|email',
            'phone'      => 'required|string',
            'dob'        => 'required|date',
            'address'    => 'required|string',
            'city'       => 'required|string',
            'state'      => 'required|string',
        ]);

        $response = $safeHaven->createIndividualSubAccount($validated);

        return response()->json(
            $response,
            $response['success'] ? 201 : 422
        );
    }
}

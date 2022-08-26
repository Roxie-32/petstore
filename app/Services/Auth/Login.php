<?php

namespace App\Services\Auth;

use App\Http\Requests\User\LoginRequest;
use App\Http\Traits\TokenTrait;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Hash;

class Login
{
    use TokenTrait;

    public function login(LoginRequest $request): JsonResponse
    {
        //check if user exists
        $user = User::where('email', $request->email)->first();

        //check if password matches
        if ($user && Hash::check($request->password, $user->password)) {
            $token = $this->assign($user);

            return new JsonResponse(['access_token' => $token, 'token_type' => 'Bearer'], 200);
        }
        return new JsonResponse(['error' => 'Failed to authenticate user'], 400);
    }
}

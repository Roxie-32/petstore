<?php

namespace App\Services\Auth;

use App\Http\Requests\User\CreateUserRequest;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CreateUser
{
    private $token;

    public function __construct(token $token)
    {
        $this->token = $token;
    }
    public function create(CreateUserRequest $request, Token $token)
    {
        //Create a user
        
        $user = User::create([

            'uuid' => Str::uuid(),
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'password' => Hash::make($request->password),
            'email' => $request->email,
            'address' => $request->address,
            'phone_number' => $request->phone_number,
            'is_marketing' => $request->is_marketing,

        ]);

        $token =  $this->token->assign($user);

        return new JsonResponse(['access_token' => $token, 'token_type' => 'Bearer',], 200);
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginUserRequest;
use App\Models\CustomAuthToken;
use App\Models\User;

class CustomAuthTokenController extends Controller
{
    public function login(LoginUserRequest $request)
    {
        $user = User::getUserByLogin(
            email: $request->email,
            password: $request->password
        );

        if(!$user) {
            return 'Credentials incorrect';
        }

        return $this->generateToken($user->id);

    }

    public function authTest()
    {
        return 'success auth';
    }

    private function generateToken(int $user_id): string
    {
        $token = bin2hex(random_bytes(32));

        CustomAuthToken::create([
            'token' => $token,
            'user_id' => $user_id
        ]);

        return $token;
    }
}

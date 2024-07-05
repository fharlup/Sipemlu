<?php

namespace App\Http\Controllers;

use App\Traits\ApiTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    use ApiTrait;

    public function central(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (!Auth::attempt(['email' => $request->email, 'password' => $request->password, 'role' => 'central'])) {
            return $this->sendResponse('Invalid credentials!', code: 401);
        }

        $user = Auth::user();
        $data['token'] = $user->createToken(env("APP_KEY"))->plainTextToken;
        $data['user'] = $user;

        return $this->sendResponse('Login successfully', data: $data);
    }
}

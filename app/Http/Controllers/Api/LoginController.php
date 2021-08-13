<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $login = $request->validate([
            'email' => 'required|string',
            'password' => 'required|string',
        ]);

        if(!Auth::attempt($login)){
            return response()->json([
                'message' => 'Invalid login credentials.',
            ]);
        }

        $access_token = Auth::user()->createToken('authToken')->accessToken;
        return response()->json([
            'user' => Auth::user(),
            'access_token' => $access_token,
        ]);

    }
}
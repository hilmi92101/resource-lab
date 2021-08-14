<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $login = $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        if(!Auth::guard('admin')->attempt($login)){
            return response()->json([
                'message' => 'Invalid login credentials.',
            ]);
        }

        $user = Auth::guard('admin')->user();
        $access_token = $user->createToken('authTokenAdmin')->accessToken;

        return response()->json([
            'user' => $user,
            'access_token' => $access_token,
        ]);

    }
}

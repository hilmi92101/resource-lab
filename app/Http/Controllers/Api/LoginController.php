<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        
        $validator = $this->loginValidation($request);
        if($validator->fails()){
            return response()->json([
                'success' => false,
                'msg'    => 'Invalid form data',
                'errors' => $validator->errors(),
            ]);
        }

        if(!Auth::attempt( ['email' => $request->user["email"], 'password' => $request->user["password"]] )){
            return response()->json([
                'message' => 'Invalid login credentials.',
            ]);
        }

        $access_token = Auth::user()->createToken('authToken')->accessToken;
        return response()->json([
            'success' => true,
            'user' => Auth::user(),
            'access_token' => $access_token,
        ]);

    }

    public function loginValidation($request)
    {
        $val_rules =  [
            'email' => 'required',
            'password' => 'required|min:3',
        ];

        $form_data = [
            'email' => $request->user["email"],
            'password' => $request->user["password"],
        ];

        $custom_messages = [
            'username.required' => 'The :attribute field is required.',
            'password.required' => 'The :attribute field is required.',
            'password.min' => 'The :attribute field minimum characters are 3.',
        ];

        return Validator::make($form_data, $val_rules, $custom_messages);
    }
}

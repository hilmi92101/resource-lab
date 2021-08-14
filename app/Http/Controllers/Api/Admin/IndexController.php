<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class IndexController extends Controller
{
    private $tokenName = 'authTokenAdmin';

    public function getAllUsers(Request $request)
    {

        $token = Auth::guard('admin-api')->user()->token();
        if($token->name !== $this->tokenName){
            return response()->json([
                'success' => false,
                'message' => 'Something went wrong',
            ]);
        }

        $admins = Admin::all();
        $users = User::all();

        return response()->json([
            'user' => Auth::guard('admin-api')->user(),
            'token' => Auth::guard('admin-api')->user()->token(),
            'admins' => $admins,
            'users' => $users,
        ]);
    }
}

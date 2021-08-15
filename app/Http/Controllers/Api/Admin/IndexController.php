<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
//use App\Http\Traits\TokenAdminTrait;


class IndexController extends Controller
{
    //use TokenAdminTrait;

    public function getAllUsers(Request $request)
    {
        // $is_valid_data = $this->isValidToken();
        // if(!$is_valid_data["success"]){
        //     return response()->json($is_valid_data);
        // }

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

<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
//use App\Http\Traits\TokenUserTrait;

class UserController extends Controller
{
    //use TokenUserTrait;

    public function index()
    {
        // $is_valid_data = $this->isValidToken();
        // if(!$is_valid_data["success"]){
        //     return response()->json($is_valid_data);
        // }

        $users = User::all();

        return response()->json([
            'user' => Auth::user(),
            'users' => $users,
        ]);
    }
}

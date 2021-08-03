<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index(Request $request)
    {
        return response()->json([
			'user' => [

                'name' => 'Ziyad',
                'email' => 'ziyad@gmail.com',
            ],
            'request' => $request->all()
			
		]); 
    }
}

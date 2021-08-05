<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;

class FormController extends Controller
{
    public function createUser(Request $request)
    {
        $val_rules =  [
            'username' => 'required',
            'password' => 'required|min:3',
            'status' => 'required',
            'personalDetail' => 'required|array|min:1',
            'workWithOthers' => 'required',
        ];

        $form_data = [
            'username' => $request->form["username"],
            'password' => $request->form["password"],
            'status' => $request->form["status"],
            'personalDetail' => $request->form["personalDetail"],
            'workWithOthers' => $request->form["workWithOthers"],
        ];

        $custom_messages = [
            'username.required' => 'The :attribute field is required.',
            'password.required' => 'The :attribute field is required.',
            'password.min' => 'The :attribute field minimum characters are 3.',
            'status.required' => 'Please choose a status.',
            'personalDetail.required' => '*Please choose at least 1 Personal Detail.',
            'workWithOthers.required' => '*This field is required.',
        ];

        $validator = Validator::make($form_data, $val_rules, $custom_messages);
        if($validator->fails()){
             return response()->json([
                'success' => false,
                'msg'    => 'Invalid form data',
                'errors' => $validator->errors(),
            ]);
        }

        return response()->json([
			
            'request' => $request->all()
			
		]); 
    }
}

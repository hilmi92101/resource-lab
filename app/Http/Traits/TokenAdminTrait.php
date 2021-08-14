<?php

namespace App\Http\Traits;

use Illuminate\Support\Facades\Auth;

trait TokenAdminTrait {

    private $tokenName = 'authTokenAdmin';
    private $success = true;

    public function isValidToken() {

        $response["success"] = $this->success;
        $token = Auth::guard('admin-api')->user()->token();
        if($token->name !== $this->tokenName){
            $response["success"] = false;
            $response["message"] = 'ERROR_TOKEN_NAME_CHECK_FAILED';
        }

        return $response;
    }
}
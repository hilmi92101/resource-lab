<?php

namespace App\Http\Traits;

use Illuminate\Support\Facades\Auth;

trait TokenUserTrait {

    private $tokenName = 'authToken';
    private $success = true;

    public function isValidToken() {

        $response["success"] = $this->success;
        $token = Auth::user()->token();
        if($token->name !== $this->tokenName){
            $response["success"] = false;
            $response["message"] = 'ERROR_TOKEN_NAME_CHECK_FAILED';
        }

        return $response;
    }
}
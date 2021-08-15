<?php

namespace App\Http\Middleware\Passport;

use Closure;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class EnsureTokenAdminIsValid
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $token = Auth::user()->token();
        if($token->name !== 'authTokenAdmin'){
            return response()->json(['success' => false, 'message' => 'Unauthorized.'], 401);
        }

        return $next($request);
    }
}

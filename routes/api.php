<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\FormController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group([ 
    'namespace' => 'Api', 
    //'middleware' => 'api', 
    //'prefix' => 'auth' 
], function ($router) { 

    // Form
    Route::post('form/create/user', [FormController::class, 'createUser']); 
    


});

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

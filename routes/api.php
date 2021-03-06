<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\FormController;
use App\Http\Controllers\Api\DropzoneController;
use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\Api\UserController;

use App\Http\Controllers\Api\Admin\LoginController as AdminLoginController;
use App\Http\Controllers\Api\Admin\IndexController as AdminIndexController;

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
    Route::post('dropzone/upload', [DropzoneController::class, 'upload']); 

    Route::prefix('/user')->group(function(){

        Route::post('login', [LoginController::class, 'login']); 
        Route::middleware(['auth:api', 'ensure.token.user.is.valid'])->post('/data', [UserController::class, 'index']); 
    });

    Route::prefix('/admin')->group(function(){
        Route::post('login', [AdminLoginController::class, 'login']); 

        Route::middleware(['auth:admin-api', 'ensure.token.admin.is.valid'])->group(function() { 
            Route::post('get-all-users', [AdminIndexController::class, 'getAllUsers']); 
        });
    });
    
    


});

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

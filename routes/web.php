<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LandingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/backoffice/{any?}', function () {
    return view('backoffice.index');
});

Route::get('/vuetify/landing/{any?}', function () {
    return view('vuetify.landing');
})->where('any', '.*');

Route::get('/vuetify/{any?}', function () {
    return view('vuetify.index');
})->where('any', '.*');



Route::get('/vuetify-test/{any?}', function () {
    return view('vuetify.test');
})->where('any', '.*');

Route::get('/{any?}', function () {
    return view('landing');
});


Route::post('/landing/data', [LandingController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

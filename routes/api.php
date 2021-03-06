<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group(['middleware' => 'api', 'prefix' => 'auth', 'namespace' => 'Api'], function () {

    Route::post('/owner/register', 'Owner\RegisterController@register');
    Route::post('/owner/login', 'AuthController@login');
    Route::post('/owner/forget-password', 'ResetPasswordController@forget_password');
    Route::post('/owner/verify-code', 'ResetPasswordController@verify_code');
    Route::post('/owner/rest-password', 'ResetPasswordController@reset_password');

    Route::post('/investor/register', 'Investor\RegisterController@register');
    Route::post('/investor/login', 'AuthController@login');
    Route::post('/investor/forget-password', 'ResetPasswordController@forget_password');
    Route::post('/investor/verify-code', 'ResetPasswordController@verify_code');
    Route::post('/investor/rest-password', 'ResetPasswordController@reset_password');

});


Route::group(['middleware' => ['jwt.verify'], 'namespace' => 'Api'], function() {
    Route::post('/auth/owner/logout', 'AuthController@logout');
    Route::post('/auth/owner/refresh', 'AuthController@refresh');
    Route::post('/auth/owner/profile', 'AuthController@user_profile');

    Route::post('/auth/investor/logout', 'AuthController@logout');
    Route::post('/auth/investor/refresh', 'AuthController@refresh');
    Route::post('/auth/investor/profile', 'AuthController@user_profile');

    Route::resource('/owner/properties', 'Owner\PropertyController', ['except'=>'delete']);
    Route::get('/owner/properties/delete/{property}', 'Owner\PropertyController@destroy');
});






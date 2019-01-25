<?php

use Illuminate\Http\Request;

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


Route::post('user/login', 'API\UserController@login');
Route::post('user/register', 'API\UserController@register');

Route::get('products/{providerName}/{productName}', 'API\ProductController@getPrice')
    ->where('providerName', '[A-Za-z0-9 ]+')
    ->where('productName', '[A-Za-z0-9 ]+');

Route::get('products/{providerName}/{productName}/{productVariant}', 'API\ProductController@getVariantsPrice')
    ->where('providerName', '[A-Za-z0-9 ]+')
    ->where('productName', '[A-Za-z0-9 ]+')
    ->where('productVariant', '[A-Za-z0-9 ]+');

Route::group(['middleware' => 'auth:api'], function () {
    Route::get('user/details', 'API\UserController@details');
    Route::patch('products/{providerName}/{productName}/{productVariant}', 'API\ProductController@updatePrice')
        ->where('providerName', '[A-Za-z0-9 ]+')
        ->where('productName', '[A-Za-z0-9 ]+')
        ->where('productVariant', '[A-Za-z0-9 ]+');
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::fallback(function(){
    return response()->json(['status' => 'ERR', 'error' => '404 not found'], 404);
});

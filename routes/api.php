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

Route::get('remita-payment-notifications', function(Request $request) {
    return response()->json([
        'status' => 200,
        'statusText' => 'OK',
    ], 200);
});

Route::post('remita-payment-notifications', function(Request $request) {
    return response()->json([
        'status' => 200,
        'statusText' => 'OK',
    ], 200);
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

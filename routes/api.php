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

//Public routes:
Route::get('/', function (Request $request) {
    return response()->json(['version' => '0']);
});

//Sanctum Auth routes. internal and interaction with dashboard features directly.
Route::middleware('auth:sanctum')->group(function () {
    //
});

//Token auth for external programs to connect to the dashboard.

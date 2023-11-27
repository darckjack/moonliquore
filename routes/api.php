<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('v1/users', \App\Http\Controllers\Api\V1\UserController::class)
    ->only(['index']);

Route::apiResource('v1/drinks', \App\Http\Controllers\Api\V1\DrinkController::class)
    ->only(['index', 'show']);

Route::get('v1/drinks/{drink}/petition', [\App\Http\Controllers\Api\V1\DrinkController::class, 'petition'])
    ->middleware('auth:sanctum');

Route::post('login', [App\Http\Controllers\Api\LoginController::class, 'login']);

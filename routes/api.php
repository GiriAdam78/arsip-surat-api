<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

/** 
 * route "/register"
 * @method "POST
*/

Route::post('public/api/register', App\Http\Controllers\Api\RegisterController::class)->name('register');

/**
 * router "/login"
 * @method "POST"
 */
Route::post('public/api/login', App\Http\Controllers\Api\LoginController::class)->name('login');

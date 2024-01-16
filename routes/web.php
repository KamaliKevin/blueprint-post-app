<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::resource('country', App\Http\Controllers\CountryController::class);

Route::resource('user', App\Http\Controllers\UserController::class);

Route::resource('post', App\Http\Controllers\PostController::class);

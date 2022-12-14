<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])
    ->name('home');

Route::get('login', [\App\Http\Controllers\Auth\SessionController::class, 'create'])
    ->middleware('guest')
    ->name('login');

Route::post('logout', [\App\Http\Controllers\Auth\SessionController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');

Route::get('/auth/google', [\App\Http\Controllers\Auth\GoogleController::class, 'googleRedirect'])
    ->name('login.google');

Route::get('/callback/google', [\App\Http\Controllers\Auth\GoogleController::class, 'googleCallback'])
    ->name('callback.google');


Route::get('support/create', [\App\Http\Controllers\SupportController::class, 'create'])->name('support.create');

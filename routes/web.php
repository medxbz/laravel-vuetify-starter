<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

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

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'page' => 'Home'
    ]);
});

Route::get('/login', function () {
    return Inertia::render('Auth/Login', [
        'page' => 'Home'
    ]);
});
// Route::get('/login', [
//     'as' => 'login.show',
//     'uses' => 'Auth\LoginController@show',
// ]);

// Route::post('/login', [
//     'as' => 'login.attempt',
//     'uses' => 'Auth\LoginController@login',
// ]);


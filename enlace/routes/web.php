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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::post('/login-customized', [App\Http\Controllers\LoginCustomizedController::class, 'login'])->name('auth.login');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/users/list', [App\Http\Controllers\UserController::class, 'userList'])
    ->name('users.userList');

Route::get('/user/detail/{userId}', [App\Http\Controllers\UserController::class, 'userDetails'])
    ->name('users.userDetails');

Route::post('/users/disable', [App\Http\Controllers\UserController::class, 'disableUser'])
    ->name('users.disableUser');

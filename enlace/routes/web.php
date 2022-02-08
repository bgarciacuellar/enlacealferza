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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\LoginCustomizedController::class, 'loginView'])->name('auth.loginView');
Route::post('/login-customized', [App\Http\Controllers\LoginCustomizedController::class, 'login'])->name('auth.login');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Admin
Route::get('/users/list', [App\Http\Controllers\AdminController::class, 'usersList'])
    ->name('admin.userList');

Route::get('/user/detail/{userId}', [App\Http\Controllers\AdminController::class, 'userDetails'])
    ->name('admin.userDetails');

Route::post('/user/create', [App\Http\Controllers\AdminController::class, 'createNewUser'])
    ->name('admin.createNewUser');

Route::post('/user/update/{userId}', [App\Http\Controllers\AdminController::class, 'updateUser'])
    ->name('admin.updateUser');

Route::post('/users/disable', [App\Http\Controllers\UserController::class, 'disableUser'])
    ->name('admin.disableUser');

Route::get('/users/search', [App\Http\Controllers\AdminController::class, 'searchUsers'])
    ->name('admin.searchUsers');

// User
Route::get('/user', [App\Http\Controllers\UserController::class, 'userDetails'])
    ->name('user.userDetails');

    
// Incidents
Route::get('/incidencias', [App\Http\Controllers\IncidentController::class, 'list'])
    ->name('incidents.list');

Route::get('/incidencias/1', [App\Http\Controllers\IncidentController::class, 'details'])
    ->name('incidents.details');

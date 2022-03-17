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

    
// Ticket
Route::get('/tickets', [App\Http\Controllers\TicketController::class, 'list'])
    ->name('ticket.list');

Route::post('/tickets/crear', [App\Http\Controllers\TicketController::class, 'create'])
    ->name('ticket.create');

Route::get('/ticket/{ticketId}', [App\Http\Controllers\TicketController::class, 'details'])
    ->name('ticket.details');

Route::post('/ticket/upload-file/{ticket}', [App\Http\Controllers\TicketController::class, 'uploadFile'])
    ->name('ticket.uploadFile');

Route::post('/ticket/add-comment/{ticket}', [App\Http\Controllers\TicketController::class, 'addComment'])
    ->name('ticket.addComment');

Route::post('/ticket/update/{ticket}', [App\Http\Controllers\TicketController::class, 'update'])
    ->name('ticket.update');

    
// Customer
Route::get('/customer/list', [App\Http\Controllers\CustomerController::class, 'list'])
    ->name('customer.list');

// Company
Route::get('/company/list', [App\Http\Controllers\CompanyController::class, 'list'])
    ->name('company.list');


Route::post('/company/create', [App\Http\Controllers\CompanyController::class, 'create'])
    ->name('company.create');

Route::get('/company/details/{id}', [App\Http\Controllers\CompanyController::class, 'details'])
    ->name('company.details');

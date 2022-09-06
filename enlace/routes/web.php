<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\LoginCustomizedController::class, 'loginView'])->name('auth.loginView');
Route::post('/login-customized', [App\Http\Controllers\LoginCustomizedController::class, 'login'])->name('auth.login');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Admin
Route::get('/inicio', [App\Http\Controllers\AdminController::class, 'dashboard'])
    ->name('admin.dashboard');

Route::get('/usuarios/lista', [App\Http\Controllers\AdminController::class, 'usersList'])
    ->name('admin.userList');

Route::get('/usuario/detalles/{userId}', [App\Http\Controllers\AdminController::class, 'userDetails'])
    ->name('admin.userDetails');

Route::post('/user/create', [App\Http\Controllers\AdminController::class, 'createNewUser'])
    ->name('admin.createNewUser');

Route::post('/user/update/{userId}', [App\Http\Controllers\AdminController::class, 'updateUser'])
    ->name('admin.updateUser');

Route::post('/users/disable', [App\Http\Controllers\UserController::class, 'disableUser'])
    ->name('admin.disableUser');

Route::get('/usuarios/busqueda', [App\Http\Controllers\AdminController::class, 'searchUsers'])
    ->name('admin.searchUsers');

Route::post('/assign-to-company/{id}', [App\Http\Controllers\AdminController::class, 'assignToCompany'])
    ->name('admin.assignToCompany');

Route::post('/unassign-company/{user}/{company}', [App\Http\Controllers\AdminController::class, 'unassignCompany'])
    ->name('admin.unassignCompany');

// User
Route::get('/usuario/tickets', [App\Http\Controllers\UserController::class, 'ticketList'])
    ->name('user.ticketList');

Route::get('/usuario', [App\Http\Controllers\UserController::class, 'userDetails'])
    ->name('user.userDetails');


// Ticket
Route::get('/tickets', [App\Http\Controllers\TicketController::class, 'list'])
    ->name('ticket.list');

Route::get('/tickets/archivados', [App\Http\Controllers\TicketController::class, 'archivedList'])
    ->name('ticket.archivedList');

Route::post('/tickets/crear', [App\Http\Controllers\TicketController::class, 'create'])
    ->name('ticket.create');

Route::get('/ticket/{ticketId}', [App\Http\Controllers\TicketController::class, 'details'])
    ->name('ticket.details');

Route::post('/ticket/upload-file/{ticket}', [App\Http\Controllers\TicketController::class, 'uploadFileToRecord'])
    ->name('ticket.uploadFile');

Route::post('/ticket/add-comment/{ticket}', [App\Http\Controllers\TicketController::class, 'addComment'])
    ->name('ticket.addComment');

Route::post('/ticket/update/{ticket}', [App\Http\Controllers\TicketController::class, 'update'])
    ->name('ticket.update');

Route::post('/ticket/next-step/{id}', [App\Http\Controllers\TicketController::class, 'nextStep'])
    ->name('ticket.nextStep');

Route::post('/ticket/last-step/{id}', [App\Http\Controllers\TicketController::class, 'lastStep'])
    ->name('ticket.lastStep');

Route::post('/ticket/upload-preinvoice/{id}', [App\Http\Controllers\TicketController::class, 'uploadPreinvoice'])
    ->name('ticket.uploadPreinvoice');

// Company
Route::get('/compania/lista', [App\Http\Controllers\CompanyController::class, 'list'])
    ->name('company.list');


Route::post('/company/create', [App\Http\Controllers\CompanyController::class, 'create'])
    ->name('company.create');

Route::get('/compania/detalles/{id}', [App\Http\Controllers\CompanyController::class, 'details'])
    ->name('company.details');

Route::post('/company/update/{id}', [App\Http\Controllers\CompanyController::class, 'update'])
    ->name('company.update');

Route::post('/company/create/employee/{id}', [App\Http\Controllers\CompanyController::class, 'createEmployee'])
    ->name('company.createEmployee');

Route::post('/company/update/employee/{company}', [App\Http\Controllers\CompanyController::class, 'udpateEmployee'])
    ->name('company.udpateEmployee');

Route::post('/company/delete/', [App\Http\Controllers\CompanyController::class, 'deleteEmployee'])
    ->name('company.deleteEmployee');

Route::get('/compania/creditos/{creditId}', [App\Http\Controllers\CompanyController::class, 'creditDetails'])
    ->name('company.creditDetails');

Route::post('/company/create-credit/{companyId}', [App\Http\Controllers\CompanyController::class, 'createNewCredit'])
    ->name('company.createNewCredit');

Route::post('/company/update-credit/{creditId}', [App\Http\Controllers\CompanyController::class, 'updateCredit'])
    ->name('company.updateCredit');

Route::post('/company/delete-credit', [App\Http\Controllers\CompanyController::class, 'deleteCredit'])
    ->name('company.deleteCredit');

Route::post('/company/use-credit/{ticketId}', [App\Http\Controllers\CompanyController::class, 'useCredits'])
    ->name('company.useCredits');

Route::post('/company/paid-credit/{ticketId}', [App\Http\Controllers\CompanyController::class, 'payCredits'])
    ->name('company.payCredits');
// Company

// Payroll
Route::get('/nomina', [App\Http\Controllers\PayrollController::class, 'list'])
    ->name('payroll.list');

Route::post('/payrolls/create', [App\Http\Controllers\PayrollController::class, 'create'])
    ->name('payroll.create');

Route::get('/nomina/detalles/{id}', [App\Http\Controllers\PayrollController::class, 'details'])
    ->name('payroll.details');

Route::post('/payrolls/update/{id}', [App\Http\Controllers\PayrollController::class, 'update'])
    ->name('payroll.update');

Route::post('/payrolls/delete', [App\Http\Controllers\PayrollController::class, 'delete'])
    ->name('payroll.delete');
// Payroll

// Employee

Route::group(
    [
        'prefix' => 'empleado',
    ],
    function () {
        Route::get('/tickets', [App\Http\Controllers\EmployeeController::class, 'tiketsList'])
            ->name('employee.tiketsList');
        Route::get('/tickets/archivados', [App\Http\Controllers\EmployeeController::class, 'archivedTicketsList'])
            ->name('employee.archivedTicketsList');
        Route::get('/tickets/detalles/{id}', [App\Http\Controllers\EmployeeController::class, 'details'])
            ->name('employee.details');
        Route::post('/tickets/extraordinario/{id}', [App\Http\Controllers\EmployeeController::class, 'createExtraordinario'])
            ->name('employee.createExtraordinario');
    }
);

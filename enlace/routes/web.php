<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\LoginCustomizedController::class, 'loginView'])->name('auth.loginView');
Route::post('/login-customized', [App\Http\Controllers\LoginCustomizedController::class, 'login'])->name('auth.login');
Route::post('/reset-password', [App\Http\Controllers\LoginCustomizedController::class, 'resetPassword'])->name('auth.resetPassword');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Admin
Route::get('/inicio', [App\Http\Controllers\AdminController::class, 'dashboard'])
    ->name('admin.dashboard');

Route::get('/comunicados', [App\Http\Controllers\AdminController::class, 'announcementView'])
    ->name('admin.announcementView');

Route::post('/send-announcement', [App\Http\Controllers\AdminController::class, 'sendAnnouncement'])
    ->name('admin.sendAnnouncement');

Route::get('/usuarios/lista', [App\Http\Controllers\AdminController::class, 'usersList'])
    ->name('admin.userList');

Route::get('/usuarios/lista-cuadricula', [App\Http\Controllers\AdminController::class, 'usersListGrid'])
    ->name('admin.usersListGrid');

Route::get('/usuario/detalles/{userId}', [App\Http\Controllers\AdminController::class, 'userDetails'])
    ->name('admin.userDetails');

Route::post('/user/create', [App\Http\Controllers\AdminController::class, 'createNewUser'])
    ->name('admin.createNewUser');

Route::post('/user/update-main-info/{userId}', [App\Http\Controllers\AdminController::class, 'updateUserMainInfo'])
    ->name('admin.updateUserMainInfo');

Route::post('/user/update-personal-info/{userId}', [App\Http\Controllers\AdminController::class, 'updateUserPersonalInfo'])
    ->name('admin.updateUserPersonalInfo');

Route::post('/user/update-company-info/{userId}', [App\Http\Controllers\AdminController::class, 'updateUserCompanyInfo'])
    ->name('admin.updateUserCompanyInfo');

Route::post('/user/update-emergency-contact/{userId}', [App\Http\Controllers\AdminController::class, 'updateUserEmergencyContact'])
    ->name('admin.updateUserEmergencyContact');

Route::post('/users/disable', [App\Http\Controllers\UserController::class, 'disableUser'])
    ->name('admin.disableUser');

Route::get('/usuarios/busqueda', [App\Http\Controllers\AdminController::class, 'searchUsers'])
    ->name('admin.searchUsers');

Route::post('/assign-to-company/{id}', [App\Http\Controllers\AdminController::class, 'assignToCompany'])
    ->name('admin.assignToCompany');

Route::post('/unassign-company/{user}/{company}', [App\Http\Controllers\AdminController::class, 'unassignCompany'])
    ->name('admin.unassignCompany');

// User
Route::get('/usuario/inicio', [App\Http\Controllers\UserController::class, 'dashboard'])
    ->name('user.dashboard');

Route::get('/usuario', [App\Http\Controllers\UserController::class, 'userDetails'])
    ->name('user.userDetails');
    
Route::get('/usuario/tickets', [App\Http\Controllers\UserController::class, 'ticketList'])
    ->name('user.ticketList');

Route::get('/usuario/companias', [App\Http\Controllers\UserController::class, 'companiesList'])
    ->name('user.companiesList');



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

Route::post('/ticket/last-step-no-feedback/{id}', [App\Http\Controllers\TicketController::class, 'lastStepNoFeedback'])
    ->name('ticket.lastStepNoFeedback');

Route::post('/ticket/upload-preinvoice/{id}', [App\Http\Controllers\TicketController::class, 'uploadPreinvoice'])
    ->name('ticket.uploadPreinvoice');

Route::post('/ticket/upload-payroll-receipt/{id}', [App\Http\Controllers\TicketController::class, 'uploadPayrollReceipt'])
    ->name('ticket.uploadPayrollReceipt');

Route::post('/ticket/upload-payment-receipt/{id}', [App\Http\Controllers\TicketController::class, 'uploadPaymentReceipt'])
    ->name('ticket.uploadPaymentReceipt');

Route::post('/ticket/upload-nominal-payment/{id}', [App\Http\Controllers\TicketController::class, 'uploadNominalPayment'])
    ->name('ticket.uploadNominalPayment');

Route::post('/ticket/upload-kardex/{id}', [App\Http\Controllers\TicketController::class, 'uploadKardex'])
    ->name('ticket.uploadKardex');
    //helpers
Route::post('/ticket/get-payroll-by-company/', [App\Http\Controllers\TicketController::class, 'getPayrollByCompany'])
    ->name('ticket.getPayrollByCompany');
Route::get('/ticket/send-dowloaded-catega-file-email/{companyId}/{ticketId}', [App\Http\Controllers\TicketController::class, 'downloadCategaFile'])
    ->name('ticket.downloadCategaFile');
Route::get('/ticket/send-dowloaded-kardex-email/{companyId}/{ticketId}', [App\Http\Controllers\TicketController::class, 'downloadKardex'])
    ->name('ticket.downloadKardex');

// Company
Route::get('/compania/lista', [App\Http\Controllers\CompanyController::class, 'list'])
    ->name('company.list');

Route::get('/compania/lista/busqueda', [App\Http\Controllers\CompanyController::class, 'listSearch'])
    ->name('company.listSearch');

Route::get('/compania/lista-cuadricula', [App\Http\Controllers\CompanyController::class, 'grid'])
    ->name('company.grid');

Route::post('/company/create', [App\Http\Controllers\CompanyController::class, 'create'])
    ->name('company.create');

Route::post('/company/delete-company', [App\Http\Controllers\CompanyController::class, 'delete'])
    ->name('company.delete');

Route::get('/compania/detalles/{id}', [App\Http\Controllers\CompanyController::class, 'details'])
    ->name('company.details');
    
/* IMSS */
Route::get('/compania/detalles/imss-alta/{companyid}/{registerImssId}', [App\Http\Controllers\CompanyController::class, 'registerImssDetails'])
    ->name('company.registerImssDetails');
Route::post('/compania/detalles/imss-alta/register-imss-accept/{companyid}/{registerImssId}', [App\Http\Controllers\CompanyController::class, 'registerImssAccepted'])
    ->name('company.registerImssAccepted');
Route::post('/compania/detalles/imss-alta/register-imss-deny/{companyid}/{registerImssId}', [App\Http\Controllers\CompanyController::class, 'registerImssDeny'])
    ->name('company.registerImssDeny');
Route::get('/compania/detalles/imss-baja/{companyid}/{registerImssId}', [App\Http\Controllers\CompanyController::class, 'cancelImssDetails'])
    ->name('company.cancelImssDetails');
Route::post('/compania/detalles/imss-baja/cancel-imss-accept/{companyid}/{cancelImssId}', [App\Http\Controllers\CompanyController::class, 'cancelImssAccepted'])
    ->name('company.cancelImssAccepted');
Route::post('/compania/detalles/imss-baja/cancel-imss-deny/{companyid}/{cancelImssId}', [App\Http\Controllers\CompanyController::class, 'cancelImssDeny'])
        ->name('company.cancelImssDeny');

/* IMSS */

Route::post('/company/update/{id}', [App\Http\Controllers\CompanyController::class, 'update'])
    ->name('company.update');

Route::post('/company/update-files/{id}', [App\Http\Controllers\CompanyController::class, 'updateFiles'])
    ->name('company.updateFiles');

Route::post('/company/delete-files/{id}', [App\Http\Controllers\CompanyController::class, 'deleteFiles'])
    ->name('company.deleteFiles');

Route::post('/company/create/employee/{id}', [App\Http\Controllers\CompanyController::class, 'createEmployee'])
    ->name('company.createEmployee');

Route::post('/company/update/employee/{company}', [App\Http\Controllers\CompanyController::class, 'udpateEmployee'])
    ->name('company.udpateEmployee');

Route::post('/company/delete/{companyId}', [App\Http\Controllers\CompanyController::class, 'deleteEmployee'])
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

Route::post('/company/delete-credit-movement/{creditId}', [App\Http\Controllers\CompanyController::class, 'deleteCreditMovement'])
    ->name('company.deleteCreditMovement');

// Additional address
Route::post('/company/create/additional-address/{id}', [App\Http\Controllers\CompanyController::class, 'createAdditionalAddress'])
    ->name('company.createAdditionalAddress');

Route::post('/company/update/additional-address/{company}', [App\Http\Controllers\CompanyController::class, 'updateAdditionalAddress'])
    ->name('company.updateAdditionalAddress');

Route::post('/company/additional-address/delete/', [App\Http\Controllers\CompanyController::class, 'deleteAdditionalAddress'])
    ->name('company.deleteAdditionalAddress');
// Additional address

// Additional phone number
Route::post('/company/create/additional-phone-number/{id}', [App\Http\Controllers\CompanyController::class, 'createAdditionalPhoneNumber'])
    ->name('company.createAdditionalPhoneNumber');

Route::post('/company/update/additional-phone-number/{company}', [App\Http\Controllers\CompanyController::class, 'updateAdditionalPhoneNumber'])
    ->name('company.updateAdditionalPhoneNumber');

Route::post('/company/additional-phone-number/delete/', [App\Http\Controllers\CompanyController::class, 'deleteAdditionalPhoneNumber'])
    ->name('company.deleteAdditionalPhoneNumber');
// Additional phone number

// Additional email
Route::post('/company/create/additional-email/{id}', [App\Http\Controllers\CompanyController::class, 'createAdditionalEmail'])
    ->name('company.createAdditionalEmail');

Route::post('/company/update/additional-email/{company}', [App\Http\Controllers\CompanyController::class, 'updateAdditionalEmail'])
    ->name('company.updateAdditionalEmail');

Route::post('/company/additional-email/delete/', [App\Http\Controllers\CompanyController::class, 'deleteAdditionalEmail'])
    ->name('company.deleteAdditionalEmail');
// Additional email

// Additional contact
Route::post('/company/create/additional-contact/{id}', [App\Http\Controllers\CompanyController::class, 'createAdditionalContact'])
    ->name('company.createAdditionalContact');

Route::post('/company/update/additional-contact/{company}', [App\Http\Controllers\CompanyController::class, 'updateAdditionalContact'])
    ->name('company.updateAdditionalContact');

Route::post('/company/additional-contact/delete/', [App\Http\Controllers\CompanyController::class, 'deleteAdditionalContact'])
    ->name('company.deleteAdditionalContact');
// Additional contact
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

/* Reports */
Route::get('/reportes', [App\Http\Controllers\ReportController::class, 'backupsView'])
    ->name('reports.backupsView');

Route::get('reports/export/', [App\Http\Controllers\ReportController::class, 'exportReports'])->name('reports.exportReports');
;

/* Reports */

// Employee

Route::group(
    [
        'prefix' => 'empleado',
    ],
    function () {
        Route::get('/inicio', [App\Http\Controllers\EmployeeController::class, 'dashboard'])
            ->name('employee.dashboard');
        Route::get('/tickets', [App\Http\Controllers\EmployeeController::class, 'tiketsList'])
            ->name('employee.tiketsList');
        Route::get('/mi-empresa', [App\Http\Controllers\EmployeeController::class, 'myCompany'])
            ->name('employee.myCompany');
        Route::get('/tickets/archivados', [App\Http\Controllers\EmployeeController::class, 'archivedTicketsList'])
            ->name('employee.archivedTicketsList');
        Route::get('/tickets/detalles/{id}', [App\Http\Controllers\EmployeeController::class, 'details'])
            ->name('employee.details');
        Route::post('/tickets/extraordinario/{id}', [App\Http\Controllers\EmployeeController::class, 'createExtraordinario'])
            ->name('employee.createExtraordinario');
        Route::get('/imss-altas', [App\Http\Controllers\EmployeeController::class, 'registerImssList'])
            ->name('imss.registerImssList');
        Route::get('/detalles/imss-alta/{registerImssId}', [App\Http\Controllers\EmployeeController::class, 'registerImssDetails'])
            ->name('imss.registerImssDetails');
        Route::post('/imss-register/{companyId}', [App\Http\Controllers\EmployeeController::class, 'registerImss'])
            ->name('imss.registerImss');
        Route::post('/imss-register-update/{registerImssId}', [App\Http\Controllers\EmployeeController::class, 'updateRegisterImss'])
            ->name('imss.updateRegisterImss');
        Route::post('/imss-register-delete', [App\Http\Controllers\EmployeeController::class, 'deleteRegisterImssRequest'])
            ->name('imss.deleteRegisterImssRequest');
        Route::get('/imss-bajas', [App\Http\Controllers\EmployeeController::class, 'cancelImssList'])
            ->name('imss.cancelImssList');
        Route::get('/imss-bajas/{registerImssId}', [App\Http\Controllers\EmployeeController::class, 'cancelImssDetails'])
            ->name('imss.cancelImssDetails');
        Route::post('/imss-cancel/{companyId}', [App\Http\Controllers\EmployeeController::class, 'cancelImss'])
            ->name('imss.cancelImss');
        Route::post('/imss-cancel-update/{cancelImssId}', [App\Http\Controllers\EmployeeController::class, 'updateCancelImss'])
                ->name('imss.updateCancelImss');
        Route::post('/imss-cancel-send-comment/{cancelImssId}', [App\Http\Controllers\EmployeeController::class, 'sendCommentsCancelImss'])
                ->name('imss.sendCommentsCancelImss');
        Route::post('/imss-cancel-accept-calculation/{cancelImssId}', [App\Http\Controllers\EmployeeController::class, 'acceptCalculationCancelImss'])
                ->name('imss.acceptCalculationCancelImss');
        Route::post('/imss-cancel-delete', [App\Http\Controllers\EmployeeController::class, 'deleteCancelImssRequest'])
            ->name('imss.deleteCancelImssRequest');
    }
);

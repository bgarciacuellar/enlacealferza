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
return view('index');
})->name('pagee');   
Route::get('/home', function () {
return view('index');
})->name('pagee');
Route::get('/index', function () {
    return view('index');
})->name('pagee');

Route::get('/employee-dashboard', function () {
    return view('employee-dashboard');
})->name('employee-dashboard');
Route::get('/chat', function () {
    return view('chat');
})->name('chat');
Route::get('/voice-call', function () {
    return view('voice-call');
})->name('voice-call');
Route::get('/video-call', function () {
    return view('video-call');
})->name('video-call');
Route::get('/outgoing-call', function () {
    return view('outgoing-call');
})->name('outgoing-call');
Route::get('/incoming-call', function () {
    return view('incoming-call');
})->name('incoming-call');
Route::get('/events', function () {
    return view('events');
})->name('events');
Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');
Route::get('/inbox', function () {
    return view('inbox');
})->name('inbox');
Route::get('/file-manager', function () {
    return view('file-manager');
})->name('file-manager');
Route::get('/employees', function () {
    return view('employees');
})->name('employees');
Route::get('/holidays', function () {
    return view('holidays');
})->name('holidays');
Route::get('/leaves', function () {
    return view('leaves');
})->name('leaves');
Route::get('/leaves-employee', function () {
    return view('leaves-employee');
})->name('leaves-employee');
Route::get('/leave-settings', function () {
    return view('leave-settings');
})->name('leave-settings');
Route::get('/attendance', function () {
    return view('attendance');
})->name('attendance');
Route::get('/attendance-employee', function () {
    return view('attendance-employee');
})->name('attendance-employee');
Route::get('/departments', function () {
    return view('departments');
})->name('departments');
Route::get('/designations', function () {
    return view('designations');
})->name('designations');
Route::get('/timesheet', function () {
    return view('timesheet');
})->name('timesheet');
Route::get('/overtime', function () {
    return view('overtime');
})->name('overtime');
Route::get('/clients', function () {
    return view('clients');
})->name('clients');
Route::get('/projects', function () {
    return view('projects');
})->name('projects');
Route::get('/tasks', function () {
    return view('tasks');
})->name('tasks');
Route::get('/task-board', function () {
    return view('task-board');
})->name('task-board');
Route::get('/leads', function () {
    return view('leads');
})->name('leads');
Route::get('/tickets', function () {
    return view('tickets');
})->name('tickets');
Route::get('/estimates', function () {
    return view('estimates');
})->name('estimates');
Route::get('/invoices', function () {
    return view('invoices');
})->name('invoices');
Route::get('/payments', function () {
    return view('payments');
})->name('payments');
Route::get('/expenses', function () {
    return view('expenses');
})->name('expenses');
Route::get('/provident-fund', function () {
    return view('provident-fund');
})->name('provident-fund');
Route::get('/taxes', function () {
    return view('taxes');
})->name('taxes');
Route::get('/salary', function () {
    return view('salary');
})->name('salary');
Route::get('/salary-view', function () {
    return view('salary-view');
})->name('salary-view');
Route::get('/payroll-items', function () {
    return view('payroll-items');
})->name('payroll-items');
Route::get('/policies', function () {
    return view('policies');
})->name('policies');
Route::get('/expense-reports', function () {
    return view('expense-reports');
})->name('expense-reports');
Route::get('/invoice-reports', function () {
    return view('invoice-reports');
})->name('invoice-reports');
Route::get('/performance-indicator', function () {
    return view('performance-indicator');
})->name('performance-indicator');
Route::get('/performance', function () {
    return view('performance');
})->name('performance');
Route::get('/performance-appraisal', function () {
    return view('performance-appraisal');
})->name('performance-appraisal');
Route::get('/goal-tracking', function () {
    return view('goal-tracking');
})->name('goal-tracking');
Route::get('/goal-type', function () {
    return view('goal-type');
})->name('goal-type');
Route::get('/training', function () {
    return view('training');
})->name('training');
Route::get('/trainers', function () {
    return view('trainers');
})->name('trainers');
Route::get('/training-type', function () {
    return view('training-type');
})->name('training-type');
Route::get('/promotion', function () {
    return view('promotion');
})->name('promotion');
Route::get('/resignation', function () {
    return view('resignation');
})->name('resignation');
Route::get('/termination', function () {
    return view('termination');
})->name('termination');
Route::get('/assets1', function () {
    return view('assets1');
})->name('assets1');
Route::get('/jobs', function () {
    return view('jobs');
})->name('jobs');
Route::get('/job-applicants', function () {
    return view('job-applicants');
})->name('job-applicants');
Route::get('/knowledgebase', function () {
    return view('knowledgebase');
})->name('knowledgebase');
Route::get('/activities', function () {
    return view('activities');
})->name('activities');
Route::get('/users', function () {
    return view('users');
})->name('users');
Route::get('/settings', function () {
    return view('settings');
})->name('settings');
Route::get('/localization', function () {
    return view('localization');
})->name('localization');
Route::get('/theme-settings', function () {
    return view('theme-settings');
})->name('theme-settings');
Route::get('/roles-permissions', function () {
    return view('roles-permissions');
})->name('roles-permissions');
Route::get('/email-settings', function () {
    return view('email-settings');
})->name('email-settings');
Route::get('/invoice-settings', function () {
    return view('invoice-settings');
})->name('invoice-settings');
Route::get('/salary-settings', function () {
    return view('salary-settings');
})->name('salary-settings');
Route::get('/notifications-settings', function () {
    return view('notifications-settings');
})->name('notifications-settings');
Route::get('/change-password', function () {
    return view('change-password');
})->name('change-password');
Route::get('/leave-type', function () {
    return view('leave-type');
})->name('leave-type');
Route::get('/profile', function () {
    return view('profile');
})->name('profile');
Route::get('/client-profile', function () {
    return view('client-profile');
})->name('client-profile');
Route::get('/login', function () {
    return view('login');
})->name('login');
Route::get('/register', function () {
    return view('register');
})->name('register');
Route::get('/forgot-password', function () {
    return view('forgot-password');
})->name('forgot-password');
Route::get('/otp', function () {
    return view('otp');
})->name('otp');
Route::get('/lock-screen', function () {
    return view('lock-screen');
})->name('lock-screen');
Route::get('/error-404', function () {
    return view('error-404');
})->name('error-404');
Route::get('/error-500', function () {
    return view('error-500');
})->name('error-500');
Route::get('/subscriptions', function () {
    return view('subscriptions');
})->name('subscriptions');
Route::get('/subscriptions-company', function () {
    return view('subscriptions-company');
})->name('subscriptions-company');
Route::get('/subscribed-companies', function () {
    return view('subscribed-companies');
})->name('subscribed-companies');
Route::get('/search', function () {
    return view('search');
})->name('search');
Route::get('/faq', function () {
    return view('faq');
})->name('faq');
Route::get('/terms', function () {
    return view('terms');
})->name('terms');
Route::get('/privacy-policy', function () {
    return view('privacy-policy');
})->name('privacy-policy');
Route::get('/blank-page', function () {
    return view('blank-page');
})->name('blank-page');
Route::get('/components', function () {
    return view('components');
})->name('components');
Route::get('/form-basic-inputs', function () {
    return view('form-basic-inputs');
})->name('form-basic-inputs');
Route::get('/form-input-groups', function () {
    return view('form-input-groups');
})->name('form-input-groups');
Route::get('/form-horizontal', function () {
    return view('form-horizontal');
})->name('form-horizontal');
Route::get('/form-vertical', function () {
    return view('form-vertical');
})->name('form-vertical');
Route::get('/form-mask', function () {
    return view('form-mask');
})->name('form-mask');
Route::get('/form-validation', function () {
    return view('form-validation');
})->name('form-validation');
Route::get('/tables-basic', function () {
    return view('tables-basic');
})->name('tables-basic');
Route::get('/data-tables', function () {
    return view('data-tables');
})->name('data-tables');
Route::get('/create-estimate', function () {
    return view('create-estimate');
})->name('create-estimate');
Route::get('/create-invoice', function () {
    return view('create-invoice');
})->name('create-invoice');
Route::get('/clients-list', function () {
    return view('clients-list');
})->name('clients-list');
Route::get('/compose', function () {
    return view('compose');
})->name('compose');
Route::get('/edit-estimate', function () {
    return view('edit-estimate');
})->name('edit-estimate');
Route::get('/edit-invoice', function () {
    return view('edit-invoice');
})->name('edit-invoice');
Route::get('/estimate-view', function () {
    return view('estimate-view');
})->name('estimate-view');
Route::get('/job-view', function () {
    return view('job-view');
})->name('job-view');
Route::get('/job-list', function () {
    return view('job-list');
})->name('job-list');
Route::get('/job-details', function () {
    return view('job-details');
})->name('job-details');
Route::get('/knowledgebase-view', function () {
    return view('knowledgebase-view');
})->name('knowledgebase-view');
Route::get('/mail-view', function () {
    return view('mail-view');
})->name('mail-view');
Route::get('/project-list', function () {
    return view('project-list');
})->name('project-list');
Route::get('/project-view', function () {
    return view('project-view');
})->name('project-view');
Route::get('/ticket-view', function () {
    return view('ticket-view');
})->name('ticket-view');
Route::get('/invoice-view', function () {
    return view('invoice-view');
})->name('invoice-view');
Route::get('/employees-list', function () {
    return view('employees-list');
})->name('employees-list');
Route::get('/shift-scheduling', function () {
    return view('shift-scheduling');
})->name('shift-scheduling');
Route::get('/shift-list', function () {
    return view('shift-list');
})->name('shift-list');
Route::get('/categories', function () {
    return view('categories');
})->name('categories');
Route::get('/budgets', function () {
    return view('budgets');
})->name('budgets');
Route::get('/budget-expenses', function () {
    return view('budget-expenses');
})->name('budget-expenses');
Route::get('/budget-revenues', function () {
    return view('budget-revenues');
})->name('budget-revenues');
Route::get('/payments-reports', function () {
    return view('payments-reports');
})->name('payments-reports');
Route::get('/project-reports', function () {
    return view('project-reports');
})->name('project-reports');
Route::get('/task-reports', function () {
    return view('task-reports');
})->name('task-reports');
Route::get('/user-reports', function () {
    return view('user-reports');
})->name('user-reports');
Route::get('/employee-reports', function () {
    return view('employee-reports');
})->name('employee-reports');
Route::get('/payslip-reports', function () {
    return view('payslip-reports');
})->name('payslip-reports');
Route::get('/attendance-reports', function () {
    return view('attendance-reports');
})->name('attendance-reports');
Route::get('/leave-reports', function () {
    return view('leave-reports');
})->name('leave-reports');
Route::get('/daily-reports', function () {
    return view('daily-reports');
})->name('daily-reports');
Route::get('/user-dashboard', function () {
    return view('user-dashboard');
})->name('user-dashboard');
Route::get('/jobs-dashboard', function () {
    return view('jobs-dashboard');
})->name('jobs-dashboard');
Route::get('/manage-resumes', function () {
    return view('manage-resumes');
})->name('manage-resumes');
Route::get('/shortlist-candidates', function () {
    return view('shortlist-candidates');
})->name('shortlist-candidates');
Route::get('/interview-questions', function () {
    return view('interview-questions');
})->name('interview-questions');
Route::get('/offer-approvals', function () {
    return view('offer-approvals');
})->name('offer-approvals');
Route::get('/experience-level', function () {
    return view('experience-level');
})->name('experience-level');
Route::get('/candidates', function () {
    return view('candidates');
})->name('candidates');
Route::get('/schedule-timing', function () {
    return view('schedule-timing');
})->name('schedule-timing');
Route::get('/apptitude-result', function () {
    return view('apptitude-result');
})->name('apptitude-result');
Route::get('/toxbox-setting', function () {
    return view('toxbox-setting');
})->name('toxbox-setting');
Route::get('/cron-setting', function () {
    return view('cron-setting');
})->name('cron-setting');
Route::get('/performance-setting', function () {
    return view('performance-setting');
})->name('performance-setting');
Route::get('/approval-setting', function () {
    return view('approval-setting');
})->name('approval-setting');
Route::get('/user-all-jobs', function () {
    return view('user-all-jobs');
})->name('user-all-jobs');
Route::get('/saved-jobs', function () {
    return view('saved-jobs');
})->name('saved-jobs');
Route::get('/applied-jobs', function () {
    return view('applied-jobs');
})->name('applied-jobs');
Route::get('/interviewing', function () {
    return view('interviewing');
})->name('interviewing');
Route::get('/offered-jobs', function () {
    return view('offered-jobs');
})->name('offered-jobs');
Route::get('/visited-jobs', function () {
    return view('visited-jobs');
})->name('visited-jobs');
Route::get('/archived-jobs', function () {
    return view('archived-jobs');
})->name('archived-jobs');
Route::get('/sub-category', function () {
    return view('sub-category');
})->name('sub-category');
Route::get('/add-estimate', function () {
    return view('add-estimate');
})->name('add-estimate');
Route::get('/calender', function () {
    return view('calender');
})->name('calender');
Route::get('/job-aptitute', function () {
    return view('job-aptitute');
})->name('job-aptitute');
Route::get('/questions', function () {
    return view('questions');
})->name('questions');
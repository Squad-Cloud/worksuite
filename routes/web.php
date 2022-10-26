<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Source\UserAccessController;
use App\Http\Controllers\Source\EmployeeController;
use App\Http\Controllers\employee\Auth\LoginController;
use App\Http\Controllers\employee\DashboardController;
use App\Http\Controllers\Source\Tasks\TaskController;
use App\Http\Controllers\Source\Events\EventController;
use App\Http\Controllers\Source\Clients\ClientController;
use App\Http\Controllers\Source\Activities\ActivityController;
use App\Http\Controllers\Source\MatterController;
use App\Http\Controllers\Source\Billing\BillController;
use App\Http\Controllers\Source\Accounts\AccountController;
use App\Http\Controllers\Source\Documents\DocumentController;
use App\Http\Controllers\Source\Reports\ReportController;
use App\Http\Controllers\Source\FileManagerController;







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
    return view('auth.login');
});

Auth::routes();

Route::group(['prefix'=>'employee'],function(){
    Route::group(['middleware' => 'guest:employee'],function(){
    Route::get('/',[LoginController::class, 'showLogin']);
    Route::post('/login',[LoginController::class, 'login'])->name('employee.login.post');

    //   Route::get('/login','admin\auth\LoginController@showLoginForm')->name('admin.login.show');
    //   Route::post('/login','admin\auth\LoginController@login')->name('admin.login.post');
   });
Route::group(['middleware' => 'auth:employee'],function(){
    Route::get('/dashboard',[DashboardController::class, 'index'])->name('employee.dashboard');
});
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//User Menu Access
Route::get('useraccess/index', [UserAccessController::class, 'index'])->name('useraccess.index');
// Route::get('useraccess/show/{id}', 'Source\UserAccessController@show')->name('useraccess.show');
// Route::post('useraccess/update/{id}', 'Source\UserAccessController@update')->name('useraccess.update');

// Employee Routes
Route::get('all_employees', [EmployeeController::class, 'index'])->name('all_employee');
Route::get('add_employees', [EmployeeController::class, 'create'])->name('add_employee');
Route::post('store_employees', [EmployeeController::class, 'store'])->name('store_employee');


// Tasks Routes
Route::get('all_tasks', [TaskController::class, 'index'])->name('all_tasks');
Route::get('add_tasks', [TaskController::class, 'create'])->name('add_tasks');


// Calender Routes
Route::get('view_calender', [EventController::class, 'index'])->name('view_calender');


// Events Routes
Route::get('add_event', [EventController::class, 'create'])->name('add_event');


// Clients Routes
Route::get('add_client', [ClientController::class, 'create'])->name('add_client');
Route::get('all_client', [ClientController::class, 'index'])->name('all_client');


// Activities Routes
Route::get('add_activity', [ActivityController::class, 'create'])->name('add_activity');
Route::get('view_activity', [ActivityController::class, 'index'])->name('view_activity');


// Matter Routes
Route::get('all_matter', [MatterController::class, 'index'])->name('all_matter');
Route::get('dashboard_matter/{id}', [MatterController::class, 'matterDshboard'])->name('dashboard_matter');
Route::get('add_matter', [MatterController::class, 'create'])->name('add_matter');
Route::post('store_matter', [MatterController::class, 'store'])->name('store_matter');
Route::get('edit_matter/{id}', [MatterController::class, 'edit'])->name('edit_matter');
Route::post('update_matter/{id}', [MatterController::class, 'update'])->name('update_matter');
Route::post('delete_matter/{id}', [MatterController::class, 'delete'])->name('delete_matter');
Route::post('time_entry', [MatterController::class, 'time_entry'])->name('time_entry');
Route::post('exp_entry', [MatterController::class, 'exp_entry'])->name('exp_entry');
Route::post('activity', [MatterController::class, 'activity'])->name('activity');


// File Manager
Route::get('filemanager', [FileManagerController::class, 'index'])->name('all_document');


// Billing Routes
Route::get('add_bill', [BillController::class, 'create'])->name('add_bill');
Route::get('all_bill', [BillController::class, 'index'])->name('all_bill');

// Accounts Routes
Route::get('add_account', [AccountController::class, 'create'])->name('add_account');
Route::get('all_account', [AccountController::class, 'index'])->name('all_account');

// Documents Routes
// Route::get('add_document', [DocumentController::class, 'create'])->name('add_document');
// Route::get('add_note', [DocumentController::class, 'create'])->name('add_note');
// Route::get('all_document', [DocumentController::class, 'index'])->name('all_document');

// Reports Routes
Route::get('task_report', [ReportController::class, 'create'])->name('task_report');
Route::get('time_log_report', [ReportController::class, 'create'])->name('time_log_report');
Route::get('finance_report', [ReportController::class, 'index'])->name('finance_report');
Route::get('income_expense_report', [ReportController::class, 'index'])->name('income_expense_report');
Route::get('Leave_report', [ReportController::class, 'index'])->name('Leave_report');
Route::get('Attendance_report', [ReportController::class, 'index'])->name('Attendance_report');




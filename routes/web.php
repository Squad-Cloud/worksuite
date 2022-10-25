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

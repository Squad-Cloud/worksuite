<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Source\UserAccessController;
use App\Http\Controllers\Source\EmployeeController;
use App\Http\Controllers\employee\Auth\LoginController;
use App\Http\Controllers\employee\DashboardController;
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

// Matter Routes
Route::get('all_matter', [MatterController::class, 'index'])->name('all_matter');
Route::get('add_matter', [MatterController::class, 'create'])->name('add_matter');
Route::post('store_matter', [MatterController::class, 'store'])->name('store_matter');

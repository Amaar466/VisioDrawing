<?php

use App\Http\Controllers\admin\AuthController;
use App\Http\Controllers\admin\DepartmentController;
use App\Http\Controllers\admin\RecordController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\LocalizationController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


//localization
Route::get("locale/{lange}",[LocalizationController::class,'setLang']);







Route::get('/user',[DashboardController::class,'index']);
Route::post('/storenew', [DashboardController::class,'store']);
Route::get('/edituser/{id}', [DashboardController::class,'edit']);
Route::post('/updateuser/{id}', [DashboardController::class, 'update']);
Route::get('/showuser',[DashboardController::class,'show']);
Route::get('/deleteuser/{id}',[DashboardController::class,'destory']);
//Route for login user
Route::get('/', function () {
    return view('login');
});

Route::middleware(['guest'])->group(function () {
    // Login route

    Route::get('/dashboard',function () {

        return view('admin.dashboard');
    });
});

Route::post('/login',[AuthController::class,'login']);
Route::get('/reset-password',function(){
    return view('admin.resetpassword');
});
Route::post('/reset-password',[AuthController::class,'update']);
Route::post('/change-password',[AuthController::class,'updatePassword']);

//Route for Record
Route::get('/record',[RecordController::class,'index']);
Route::post('/add-record',[RecordController::class,'store']);
Route::get('/showRecord',[RecordController::class,'show']);
Route::get('/editRecord',[RecordController::class,'edit']);
Route::post('/updaterecord/{id}',[RecordController::class,'update']);
Route::get('/deleterecord/{id}',[RecordController::class,'destory']);

//Route for Department
Route::get('/department',[DepartmentController::class,'index']);
Route::post('/add-department',[DepartmentController::class,'store']);
Route::post('/updatedepartment/{id}',[DepartmentController::class,'update']);
Route::get('/deletedepartment/{id}',[DepartmentController::class,'destroy']);

//Route for logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


Route::get('/menu',function () {
    return view('admin.menu');
});

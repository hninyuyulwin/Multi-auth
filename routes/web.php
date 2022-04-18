<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\SupervisorController;

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

Route::group(['prefix' => 'admin','middleware' => 'auth'] , function(){
    Route::get('/normalUser', [HomeController::class, 'index']);

    Route::get('/users',[UserController::class,'index']);
    Route::get('/users/{id}/edit',[UserController::class,'edit']);
    Route::post('/users/{id}/update',[UserController::class,'update']);
    
    Route::get('/managers',[ManagerController::class,'index'])->middleware('auth');
    Route::get('/supervisors',[SupervisorController::class,'index']);
    Route::get('/staffs',[StaffController::class,'index']); 

    Route::get('/roles', [RoleController::class,'index']);
});

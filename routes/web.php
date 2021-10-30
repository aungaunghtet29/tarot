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


Auth::routes();



Route::get('/' , [App\Http\Controllers\Frontend\PageController::class , 'home']);
Route::get('order-form' , [App\Http\Controllers\Frontend\PageController::class , 'orderForm'])->name('order.form');
Route::post('order-form' , [App\Http\Controllers\Frontend\PageController::class , 'orderStore' ])->name('order');

/*    Admin    */

Route::get('admin/login' , [App\Http\Controllers\Auth\AdminLoginController::class , 'showLoginForm']);
Route::post('admin/login' , [App\Http\Controllers\Auth\AdminLoginController::class , 'login'])->name('admin.login');


/* Employee */
Route::get('emp/login' , [App\Http\Controllers\Auth\EmployeeLoginController::class , 'showLoginForm']);
Route::post('emp/login' , [App\Http\Controllers\Auth\EmployeeLoginController::class , 'login'])->name('emp.login');

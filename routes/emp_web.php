<?php

use Illuminate\Support\Facades\Route;

Route::prefix('emp')->middleware('auth:emp_user')->namespace('App\Http\Controllers\Backend')->group(function () {

    Route::get('/' , function(){
        return redirect()->route('order-list.index');
    });

    Route::get('detail-employee' , 'PageController@employeeDetail')->name('detail.employee');

    Route::resource('order-list', 'EmployeeOrderController');
    Route::get('order-list/emp/server' , 'EmployeeOrderController@server')->name('order.server');


    Route::get('approved' , 'EmployeeOrderHistory@approveOrder')->name('emp.approved');
    Route::get('order-history/emp/approved' , 'EmployeeOrderHistory@approvedServer');


    Route::get('cancel' , 'EmployeeOrderHistory@cancelOrder')->name('emp.cancel');
    Route::get('order-history/emp/cancel' , 'EmployeeOrderHistory@cancelServer');

    Route::post('logout' , 'EmployeeController@logout')->name('emp.logout');
});

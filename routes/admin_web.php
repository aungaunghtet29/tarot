<?php

use Illuminate\Support\Facades\Route;

Route::prefix('admin')->middleware('auth:admin_user')->namespace('App\Http\Controllers\Backend')->group(function () {
    //Route::get('/' , 'PageController@home')->name('home.admin');

    Route::get('/' , function(){
        return redirect()->route('order-list-admin.index');
    });
    Route::resource('admin-user', 'AdminUserController');

    Route::get('detail-admin' , 'PageController@adminDetail')->name('detail.admin');

    Route::resource('employee-list', 'EmployeeController');

    Route::resource('order-list-admin', 'OrderController');
    Route::get('order-list/datatables/server' , 'OrderController@server')->name('order.server');



    Route::get('approved-list' , 'AdminOrderHistory@approveOrder')->name('admin.approved');

    Route::get('order-history/admin/approved' , 'AdminOrderHistory@approvedServer');


    Route::get('cancel-list' , 'AdminOrderHistory@cancelOrder')->name('admin.cancel');
    Route::get('order-history/admin/cancel' , 'AdminOrderHistory@cancelServer');

    Route::post('admin-logout' , 'PageController@logout')->name('admin.logout');
});

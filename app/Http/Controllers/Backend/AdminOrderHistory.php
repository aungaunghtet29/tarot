<?php

namespace App\Http\Controllers\Backend;

use Carbon\Carbon;
use App\Models\Order;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\Http\Controllers\Controller;

class AdminOrderHistory extends Controller
{
    public function approveOrder()
    {

        return view('backend.order_list.approved_order');
    }

    public function cancelOrder()
    {

        return view('backend.order_list.cancel_order');
    }

    public function approvedServer()
    {
        return Datatables::of(Order::where('type' , '=' , 1))->
            editColumn('type', function ($e) {

                return '<p class="badge bg-success " style="color : #fff;">Approved</p>';

        })
            ->editColumn('created_at', function ($e) {
                $createY = Carbon::parse($e->created_at)->format('Y-m-d');
                $createT = Carbon::parse($e->created_at)->format('g:i a');
                return '
            <table class="table table-bordered">
                <tbody>
                    <tr><td>Time</td><td>' . $createT . '</td></tr>
                    <tr><td>Date</td><td>' . $createY . '</td></tr>
                </tbody>
            </table>';
            })
            ->addColumn('action' , function($e){
                $delete = '<a href="" class="text-danger delete text-center mx-auto d-block" style="font-size:20px;" data-id="'. $e->id .'"><i class="fa fa-trash"></i></a>';

                return $delete;
            })

            ->rawColumns(['type', 'created_at' ,'action'])
            ->make(true);
    }

    public function cancelServer()
    {
        return Datatables::of(Order::where('type' , '=' , -1))->
            editColumn('type', function ($e) {


                return '<p class="badge bg-danger " style="color : #fff;">Cancel</p>';

        })
            ->editColumn('created_at', function ($e) {
                $createY = Carbon::parse($e->created_at)->format('Y-m-d');
                $createT = Carbon::parse($e->created_at)->format('g:i a');
                return '
            <table class="table table-bordered">
                <tbody>
                    <tr><td>Time</td><td>' . $createT . '</td></tr>
                    <tr><td>Date</td><td>' . $createY . '</td></tr>
                </tbody>
            </table>';
            })

            ->addColumn('action' , function($e){
                $delete = '<a href="" class="text-danger delete text-center mx-auto d-block" style="font-size:20px;" data-id="'. $e->id .'"><i class="fa fa-trash"></i></a>';

                return $delete;
            })
            ->rawColumns(['type', 'created_at' , 'action'])
            ->make(true);
    }
}

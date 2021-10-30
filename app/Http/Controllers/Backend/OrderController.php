<?php

namespace App\Http\Controllers\Backend;

use Carbon\Carbon;
use App\Models\Order;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function index(){
        return view('backend.order_list.index');
    }

    public function destroy($id){
        $order = Order::findOrFail($id);
        $order->delete();

        return 'success';
    }
    public function server(){
        return Datatables::of(Order::orderby('created_at' , 'DESC'))->
        editColumn('type' , function($e){
            switch ($e->type) {
                case 1:

                        return '<p class="badge bg-success " style="color : #fff;">Approved</p>';
                    break;
                case -1:

                        return '<p class="badge bg-danger" style="color : #fff;">Cancel</p>';
                    break;
                case 0:

                        return '<p class="badge bg-warning" style="color : #fff;">Pending</p>';
                    break;
            }
        })
        ->editColumn('created_at' , function($e){
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
        ->rawColumns(['type' ,'action', 'created_at'])
        ->make(true);
    }
}

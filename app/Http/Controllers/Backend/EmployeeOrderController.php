<?php

namespace App\Http\Controllers\Backend;

use Carbon\Carbon;
use App\Models\Order;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\Http\Controllers\Controller;

class EmployeeOrderController extends Controller
{
    public function index()
    {
        return view('backend.employee_dashboard.order_list.index');
    }

    public function edit($id){

        $order = Order::findOrFail($id);

        return view('backend.employee_dashboard.order_list.edit' , compact('order'));
    }

    public function update($id , Request $request){
        $order = Order::findOrFail($id);

        $order->type = $request->type;
        $order->customer_address = $request->customer_address;
        $order->cancel_text = $request->comment;
        $order->update();

        return redirect()->route('order-list.index')->with(['update' , 'Order Update !']);


    }

    public function server()
    {
        return Datatables::of(Order::orderby('created_at', 'DESC'))->
            editColumn('type', function ($e) {
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
            ->addColumn('contact', function ($e) {
                if ($e->type != 0) {
                    return '<button disabled class="btn btn-sm btn-secondary d-block mx-auto"> Done </button>';
                }

                return '
                <a href=" ' . route('order-list.edit', $e->id) . ' " style="text-decoration:none;"><button class="btn btn-sm btn-outline-dark d-block mx-auto">Contact </button></a>
                ';

            })

            ->rawColumns(['type', 'created_at', 'contact'])
            ->make(true);
    }


}

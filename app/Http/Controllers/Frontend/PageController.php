<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Helpers\OrderIDGenerate;
use App\Http\Requests\OrderRequest;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function home(){
        return view('frontend.home');
    }

    public function orderForm(){
        return view('frontend.order');
    }

    public function orderStore(OrderRequest $request){
            $order = new Order();

            // Order::firstOrCreate(
            //     [
            //         'order_id' =>  OrderIDGenerate::orderID(),
            //     ],

            // );

            $order->customer_name = $request->customer_name;
            $order->customer_phone = $request->customer_phone;
            $order->customer_address = $request->customer_address;
            $order->type = '0';
            $order->order_id = OrderIDGenerate::orderID();


            $order->save();

            return redirect()->back()->with(['success' => 'အော်ဒါတင်ပြီးပါပြီ !']);

        }
}

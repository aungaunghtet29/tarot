<?php

namespace App\Helpers;

use App\Models\Order;


class OrderIDGenerate{

    public static function orderID(){
        $num = mt_rand(1000000, 9999999);

        if(Order::where('order_id' , $num)->exists()){
            self::orderID();
        }

        return $num;
    }
}

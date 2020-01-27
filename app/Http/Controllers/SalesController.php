<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Sales;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Arr;
use stdClass;

class SalesController extends Controller
{
    public function index()
    {
        $user = Auth::user()->level > 0;
        if($user == false){
            return view('welcome');
        }

        $totalPrice = 0;
        $totalQuantity = 0;
        $orders = DB::select("SELECT `Order` FROM `orders`");
//        $info = DB::select('select * from orders');
        $info = Admin::all();
        $app = app();
        $data = $app->make('stdClass');

        foreach ($orders as $key => $item){
            $orders[$key]->Order = unserialize($item->Order);
            $totalPrice += $orders[$key]->Order->totalPrice;
            $totalQuantity += $orders[$key]->Order->totalQuantity;
        }

        foreach($info as $key => $item){
            foreach($orders[$key]->Order->items as $test){
                $name = $test['item']->name;
                $amount = $test['qty'];
                $price = $test['item']->price;
                    if(property_exists($data, $test['item']->name))
                    {
                        $data->$name[0] += $amount;
                    }
                    else{
                        $data->$name = [$amount, $price];

                    }
            }
        }
        return view('sales',['orders' => $orders,'totalPrice' => $totalPrice,'totalQuantity' => $totalQuantity, 'data' => $data]);
    }
}


<?php

namespace App\Http\Controllers;

use App\Orders;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('order');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'naam' => 'required|max:64',
            'email' => 'required|E-Mail',
            'straat' => 'required|max:256',
            'plaats' => 'required|max:128',
            'postcode' => 'required|max:10',
            'opmerking' => 'nullable'
        ]);

        $cartString = serialize(Session::get('cart'));
        $user = Auth::user()->name;

        $order = new Orders([
            'Name' => $request->get('naam'),
            'Email' => $request->get('email'),
            'Street' => $request->get('straat'),
            'City' => $request->get('plaats'),
            'Zip_code' => $request->get('postcode'),
            'comment' => $request->get('opmerking', 'No comment given'),
            'Order' => $cartString,
            'User_id' => DB::select("SELECT `id` FROM `users` WHERE `name` = '$user'")[0]->id,
            'Status' => 'open'
        ]);
        $order->save();
        Session::forget('cart');
        return redirect('')->withError('Order has been made')->withInput();;
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $user = Auth::user()->name;
        $userId =  DB::select("SELECT `id` FROM `users` WHERE `name` = '$user'")[0]->id;
        $info = Orders::where('User_id', $userId)->get();
        $orders = Orders::select('Order')->where('User_id', $userId)->get();
        foreach ($orders as $key => $item){
            $orders[$key]->Order = unserialize($item->Order);
        }
        return view('orderView', ['orders' => $orders, 'info' => $info]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Orders  $orders
     * @return \Illuminate\Http\Response
     */
    public function edit(Orders $orders)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Orders  $orders
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Orders $orders)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Orders  $orders
     * @return \Illuminate\Http\Response
     */
    public function destroy(Orders $orders)
    {
        //
    }
}


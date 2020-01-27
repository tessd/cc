<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AdminController extends Controller
{
    public function __construct()
    {

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user()->level > 0;
        if($user == false){
            return view('auth.login');
        }
        $orders = DB::select("SELECT `Order` FROM `orders`");
        $info = DB::select('select * from orders');
        $mytime = Carbon::now();
//        $info = DB::select('select * from orders');
        $info = Admin::all();
        foreach ($orders as $key => $item){
            $orders[$key]->Order = unserialize($item->Order);
        }
        return view('admin', ['Orders' => $orders, 'Info' => $info, 'mytime' => $mytime]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $order = Admin::find($id);
        if($order->Status == 'open'){
            $order->Status = 'closed';
        }
        else {
            $order->Status = 'open';
        }
        $order->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order = Admin::find($id);
        $order->delete();
        return back();
    }
}

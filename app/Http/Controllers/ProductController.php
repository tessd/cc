<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Session;

use function Psy\info;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('product', compact('products'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $products = product::where('category_id', $id)->get();
        return view('product', compact('products'));
    }

    public function addToCart(request $request, $name)
    {
//        $product = DB::table('products')->where('name', $name)->first();
        $product = product::where('name', $name)->first();
        if($request->session()->has('cart')){
            $oldCart = $request->session()->get('cart');
        }
        else {
            $oldCart = null;
        }
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);
        $request->session()->put('cart', $cart);
        return redirect()->back()->withError('Item ' . $product->name . ' has been added')->withInput();
    }

    public function getCart()
    {
        if(Session::has('cart')){
            $oldCart = Session::get('cart');
            $cart = new Cart($oldCart);
            return view('order', ['data' => $cart->items, 'totalPrice' => $cart->totalPrice, 'totalQuantity' => $cart->totalQuantity]);
        }
        else{
            return view('order', ["data" => null]);
        }
    }

    public function deleteItem($id)
    {
        $oldCart = Session::get('cart');
        $oldCart->totalQuantity = $oldCart->totalQuantity - $oldCart->items[$id]['qty'];
        $oldCart->totalPrice = $oldCart->totalPrice - $oldCart->items[$id]['price'];
        unset($oldCart->items[$id]);
        $cart = new Cart($oldCart);
        if($cart->totalQuantity < 1){
            return redirect()->back()->withError('Winkelmand is leeg, voeg nieuwe producten toe!')->withInput();
        }
        return redirect()->back()->with(['data' => $cart->items, 'totalPrice' => $cart->totalPrice, 'totalQuantity' => $cart->totalQuantity]);
    }

    public function changeQuantity($id, $value, $price)
    {
        $oldCart = Session::get('cart');
        if($value == 0) {
            $oldCart->items[$id]['qty']++;
            $oldCart->totalPrice += $price;
            $oldCart->items[$id]['price'] = $price * $oldCart->items[$id]['qty'];
            $oldCart->totalQuantity++;
            $cart = new Cart($oldCart);
            return redirect()->back()->with(['data' => $cart->items, 'price' => $oldCart->items[$id]['price'] , 'totalPrice' => $cart->totalPrice, 'totalquantity' => $cart->totalQuantity]);
        }
        else {
            $oldCart->totalQuantity--;
            $oldCart->items[$id]['qty']--;
            $oldCart->totalPrice -= $price;
            $oldCart->items[$id]['price'] = $price * $oldCart->items[$id]['qty'];
            if($oldCart->items[$id]['qty'] == 0) {
                unset($oldCart->items[$id]);
                return redirect()->back();
            }
            else {
                $cart = new Cart($oldCart);
                return redirect()->back()->with(['data' => $cart->items, 'price' => $oldCart->items[$id]['price'] , 'totalPrice' => $cart->totalPrice, 'totalquantity' => $cart->totalQuantity]);
            }
        }
    }
}


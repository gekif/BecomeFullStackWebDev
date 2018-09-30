<?php

namespace App\Http\Controllers\front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
    public function index()
    {
        return view('front.cart.index');
    }

    public function store(Request $request)
    {
        Cart::add($request->id, $request->name, 1, $request->price)->associate('App\Product');
        return redirect()->back()->with('msg', 'Item has been added to cart');
    }
}

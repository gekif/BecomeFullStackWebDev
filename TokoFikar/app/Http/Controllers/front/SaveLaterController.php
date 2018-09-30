<?php

namespace App\Http\Controllers\front;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SaveLaterController extends Controller
{
    public function destroy($id)
    {
        Cart::instance('saveForLater')->remove($id);

        return redirect()->back()->with('msg', 'Item has been removed save for later');
    }
}

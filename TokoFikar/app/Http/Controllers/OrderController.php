<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        return view('admin.orders.index', compact('orders'));
    }

    public function confirm($id)
    {
        // Find the order
        $order = Order::find($id);

        // Update the order
        $order->update(['status' => 1]);

        // Session message
        session()->flash('msg', 'Pesanan sudah dikonfirmasi');

        // Redirect the page
        return redirect('admin/orders');
    }

    public function show($id)
    {
        $order = Order::find($id);
        return view('admin.orders.details', compact('order'));
    }


}

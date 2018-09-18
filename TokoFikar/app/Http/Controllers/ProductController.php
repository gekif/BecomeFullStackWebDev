<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        return view('admin.products.create');
    }

    public function store(Request $request)
    {
        // Validate the form
        $request->validate([
            'name' => 'required',
            'price' =>'required',
            'description' => 'required',
            'image' => 'image|required'
        ]);

        // Upload the image
        if ($request->hasFile('image')) {
            $image = $request->image;
            $image->move('uploads', $image->getClientOriginalName());
        }

        // Save the data into database
        Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'image' => $request->image->getClientOriginalName()
        ]);

        // Session Message
        $request->session()->flash('msg', 'Produk sudah ditambah');

        // Redirect the form
        return redirect('products/create');
    }

    public function destroy($id)
    {
        // Delete the product
        Product::destroy($id);

        // Store a message
        session()->flash('msg', 'Produk sudah dihapus');

        //Redirect back
        return redirect('/products');
    }
}

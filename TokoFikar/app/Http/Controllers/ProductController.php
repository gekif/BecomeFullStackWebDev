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
        $product = new Product();
        return view('admin.products.create', compact('product'));
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
        return redirect('products');
    }


    public function edit($id)
    {
        $product = Product::find($id);
        return view('admin.products.edit', compact('product'));
    }


    public function update(Request $request, $id)
    {
        // Find the product
        $product = Product::find($id);

        // Validate the from
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required'
        ]);

        // Check if there is any image
        if ($request->hasFile('image')) {
            // Check if the old image exists inside folder
            if (file_exists(public_path('uploads/') . $product->image)) {
                unlink(public_path('uploads/') . $product->image);
            }

            // Upload the new image
            $image = $request->image;
            $image->move('uploads', $image->getClientOriginalName());

            $product->image = $request->image->getClientOriginalName();
        }

        // Updating the product
        $product->update([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'image' => $product->image
        ]);

        // Store a message in session
        $request->session()->flash('msg', 'Produk berhasil diubah');

        // Redirect back
        return redirect('products');
    }


    public function show($id)
    {
        $product = Product::find($id);
        return view('admin.products.details', compact('product'));
    }


}

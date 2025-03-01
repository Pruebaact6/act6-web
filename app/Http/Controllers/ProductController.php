<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    // Display the list of products
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    // Show the form to create a new product
    public function create()
{
    return view('products.create');
}

    // Store a new product in the database
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);

        Product::create($request->all());
        return redirect()->route('products.index');
    }

    // Show the form to edit an existing product
    public function edit($id)
    {
        return view('products.edit', ['id' => $id]); // View will not be used, just its path
    }
}

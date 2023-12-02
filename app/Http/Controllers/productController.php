<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; use App\Models\Product;

class ProductController extends Controller { // Display all products public function index(){ return view(‘products.index’, [ ‘products’ => Product::all() ]); }

// Show the form to create a new product
public function create(){
    return view('products.create');
}

// Store a new product in the database
public function store(Request $request){
    $newProduct = Product::create($request->validate([
        'name' => 'required',
        'qty' => 'required|numeric',
        'price' => 'required|decimal:0,2',
        'description' => 'nullable'
    ]));

    return redirect()->route('product.index');
}

// Show the form to edit an existing product
public function edit(Product $product){
    return view('products.edit', compact('product'));
}

// Update an existing product in the database
public function update(Product $product, Request $request){
    $product->update($request->validate([
        'name' => 'required',
        'qty' => 'required|numeric',
        'price' => 'required|decimal:0,2',
        'description' => 'nullable'
    ]));

    return redirect()->route('product.index')->with('success', 'Product Updated Succesffully');
}

// Delete an existing product from the database
public function destroy(Product $product){
    $product->delete();
    return redirect()->route('product.index')->with('success', 'Product deleted Succesffully');
}

// Display all trashed products
public function trashed(){
    return view('products.trashed', [
        'products' => Product::onlyTrashed()->get()
    ]);
}

// Restore a trashed product
public function restore(string $id){
    Product::where('id', $id)->restore();
    return redirect()->route('product.index');
}

}
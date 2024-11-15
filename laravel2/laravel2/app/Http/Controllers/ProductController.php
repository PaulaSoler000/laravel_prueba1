<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Requests\CreateProductRequest;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view("products.index", compact("products"));
    }

    public function create()
    {
        return view('products-create');
    }

    public function store(CreateProductRequest $request)
    {
        Product::create($request->all());
        return redirect()->route('products.index');

        /*$product = new Product();
        $product->name = $request->name;
        $product->save();*/
    }

    public function edit($id)
    {
        $product = Product::find($id);
        return view('products.edit', compact('product'));
    }

    public function destroy(Request $request, $id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('products.index');


    }

    public function update(CreateProductRequest $request, $id)
    {
        $product = Product::find($id);
        $product->name = $request->name;
        $product-> description = $request->description;
        $product->price = $request->price; //update($request->all());
        $product->save();
        return redirect()->route('products.index');
    }
}


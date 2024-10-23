<?php

namespace App\Http\Controllers;
use Auth;
use App\Models\Product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all(Auth::user()->id);
        return view('dashboard', compact('products'));
    }

    public function store(Request $request)
    {
        Product::create([
            'product_name' => $request->product_name,
            'user_id' => Auth::user()->id
        ]);
        return redirect()->route('dashboard');
    }

    public function destroy(string $id)
    {
        $product = Product::find($id);
        if(Auth::user()->id != $product->user_id)
        {
            return abort(401);
        }
        $product->delete();
        return redirect()->route('dashboard');
    }



}

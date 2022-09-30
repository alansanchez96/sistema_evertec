<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Shop;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('product.index', compact('products'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $shop = new Shop;
        $shop->customer_name = $request->customer_name;
        $shop->customer_email = $request->customer_email;
        $shop->customer_mobile = $request->customer_mobile;
        $shop->save();
    }

    public function show(Product $product)
    {
        return view('product.show', compact('product'));
    }

    public function edit(Product $product)
    {
        //
    }

    public function update(Request $request, Product $product)
    {
        //
    }

    public function destroy(Product $product)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
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
        $order = new Order;
        $order->customer_name = $request->customer_name;
        $order->customer_email = $request->customer_email;
        $order->customer_mobile = $request->customer_mobile;
        $order->status = 'CREATED';
        $order->save();
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

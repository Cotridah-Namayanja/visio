<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('form');

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $products=Product::get();
        return view('pdtlist', [
            'products'=> $products
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        request()->validate([
            'product_name' => 'required|string|max:255',
            'unit',
            'quantity' => 'required|integer',
             'selling_price' => 'required|integer',
             'buying_price' => 'required|integer',

            ]);
            Product::create([
                'product_name' => $request->product_name,
                'unit'=>$request->unit,
                'quantity'=>$request->quantity,
                'buying_price'=>$request->buying_price,
                'selling_price'=>$request->selling_price,

            ]);
    
            return redirect()->route('pdtlist');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}

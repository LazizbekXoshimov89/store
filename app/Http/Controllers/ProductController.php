<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductCreateRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Product::get();
        return response()->json(["product"=>  $product],201);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductCreateRequest $request)
    {
        Product::create([
            "title"=>$request->title,
            "category_id"=>$request->category_id,
            "price"=>$request->price,
            "count"=>$request->count,
            "active"=>$request->active,
            "info"=>$request->info,
            "current_count"=>$request->current_count
        ]);

        return response()->json(["message"=> "product yaratildi "],201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

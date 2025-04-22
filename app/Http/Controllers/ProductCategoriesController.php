<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductCategoriesCreateRequest;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class ProductCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productCategories = ProductCategory::get();
        return response()->json(["productCategories"=>  $productCategories],201);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductCategoriesCreateRequest $request)
    {
        ProductCategory::create([
            "title"=>$request->title,
            "image"=>$request->image,
            "active"=>$request->active
        ]);

        return response()->json(["message"=> "kategoriya yaratildi "],201);
    }

    /**
     * Display the specified resource.
     */


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

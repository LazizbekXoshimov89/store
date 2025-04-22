<?php

use App\Http\Controllers\ProductCategoriesController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


Route::post("user/login", [UserController::class, "login"]);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group(['middleware'=>'auth:sanctum'],function(){

    Route::post("productCategories/create", [ProductCategoriesController::class, "store"]);
    Route::get("productCategories/show", [ProductCategoriesController::class, "index"]);
    Route::post("product/create", [ProductController::class, "store"]);
} );
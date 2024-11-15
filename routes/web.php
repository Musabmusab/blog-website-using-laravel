<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('add',[ProductController::class,'add']);
Route::get('view',[ProductController::class,'view']);
Route::post('upload',[ProductController::class,'upload']);

Route::get('product_detail/{id}',[ProductController::class,'product_detail']);
Route::get('update_product/{id}',[ProductController::class,'update_product']);
Route::post('edit_pro/{id}',[ProductController::class,'edit_product']);
Route::get('delete_product/{id}',[ProductController::class,'delete_product']);





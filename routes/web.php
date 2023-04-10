<?php

use App\Http\Controllers\productController;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('onlineShop');
});

Route::get('/product', [productController::class,'items']);

Route::get('/productDetail/{status}', [productController::class,'details']);

//kalau notfound langsung ke fallback kesini
Route::fallback(function(){
    return view('onlineShop');
});

// Route::get('/productDetail/{status}', [productController::class,'items2']);

// Route::get('/productDetail/{status}', function () {
//     return view('productDetail');
// });

// Route::get('/product', function () {
//     return view('product');
// });

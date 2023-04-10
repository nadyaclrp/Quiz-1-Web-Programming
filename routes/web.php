<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('onlineShop');
});

Route::get('/product', function(){
    $productCard = [
        ['productName' => 'Diamond', 'status' => 'R', 'price' => 1000],
        ['productName' => 'Weapon', 'status' => 'SR', 'price' => 2000],
        ['productName' => 'Knife', 'status' => 'SSR', 'price' => 3000],
    ];
    return view('product',compact('productCard'));
});

// Route::get('/product', function () {
//     return view('product');
// });

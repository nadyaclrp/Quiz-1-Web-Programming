<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productController extends Controller
{
    public function items(){
        $productCard = [
            ['productName' => 'Diamond', 'status' => 'R', 'price' => 1000],
            ['productName' => 'Weapon', 'status' => 'SR', 'price' => 2000],
            ['productName' => 'Knife', 'status' => 'SSR', 'price' => 3000],
        ];
        return view('product',compact('productCard'));
        // return view('product')-> with('card',$productCard);
    }

}

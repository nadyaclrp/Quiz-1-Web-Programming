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
            ['productName' => 'Super Diamond', 'status' => 'R', 'price' => 4000],
            ['productName' => 'Super Weapon', 'status' => 'SSR', 'price' => 5000],
            ['productName' => 'Super Knife', 'status' => 'SR', 'price' => 6000],
        ];
        return view('product',compact('productCard'));
        // return view('product')-> with('card',$productCard);
    }

    // public function details($checkedStatus){
    //     $detailedItems = [
    //         ['level'=>'R','desc'=>'Status benda ini Rare, sangat bermanfaat untuk meningkatkan kekuatan karaktermu!'],
    //         ['level'=>'SR','desc'=>'Status benda ini Super Rare, sangat bermanfaat untuk meningkatkan kekuatan karaktermu!'],
    //         ['level'=>'SSR','desc'=>'Status benda ini Super Super Rare, sangat bermanfaat untuk meningkatkan kekuatan karaktermu!'],
    //     ];

    //     $tampungPrint = [];
    //     foreach($detailedItems as $description) {
    //         if($description['level'] == $checkedStatus){
    //             $tampungPrint = $description;
    //         }
    //     };
    //     return view('productDetail',compact('tampungPrint'));
    // }

    public function details($check){

        $detailedItems = [
            ['itemName' => 'Diamond', 'level'=>'R','price' => 1000,'desc'=>'Status benda ini Rare, sangat bermanfaat untuk meningkatkan kekuatan karaktermu!'],
            ['itemName' => 'Weapon', 'level'=>'SR','price' => 2000,'desc'=>'Status benda ini Super Rare, sangat bermanfaat untuk meningkatkan kekuatan karaktermu!'],
            ['itemName' => 'Knife', 'level'=>'SSR','price' => 3000,'desc'=>'Status benda ini Super Super Rare, sangat bermanfaat untuk meningkatkan kekuatan karaktermu!'],
            ['itemName' => 'Super Diamond', 'level'=>'R','price' => 4000, 'desc'=>'Status benda ini Rare, sangat bermanfaat untuk meningkatkan kekuatan karaktermu!'],
            ['itemName' => 'Super Weapon',  'level'=>'SSR','price' => 5000,'desc'=>'Status benda ini Super Super Rare, sangat bermanfaat untuk meningkatkan kekuatan karaktermu!'],
            ['itemName' => 'Super Knife', 'level'=>'SR','price' => 6000,'desc'=>'Status benda ini Super Rare, sangat bermanfaat untuk meningkatkan kekuatan karaktermu!'],
        ];

        $tampungPrint = [];
        foreach($detailedItems as $description) {
            if($description['itemName'] == $check){
                $tampungPrint = $description;
            }
        };
        return view('productDetail',compact('tampungPrint'));
    }

    // public function items2($checkedStatus){
    //     $productCard = [
    //         ['productName' => 'Diamond', 'status' => 'R', 'price' => 1000],
    //         ['productName' => 'Weapon', 'status' => 'SR', 'price' => 2000],
    //         ['productName' => 'Knife', 'status' => 'SSR', 'price' => 3000],
    //         ['productName' => 'Super Diamond', 'status' => 'R', 'price' => 1000],
    //         ['productName' => 'Super Weapon', 'status' => 'SSR', 'price' => 2000],
    //         ['productName' => 'Super Knife', 'status' => 'SR', 'price' => 3000],
    //     ];
    //     $tampungPrint2 = [];
    //     foreach($productCard as $description2) {
    //         if($description2['status'] == $checkedStatus){
    //             $tampungPrint2 = $description2;
    //         }
    //     };
    //     return view('productDetail',compact('tampungPrint2'));
    // }

}


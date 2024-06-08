<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

$arrayDiscount = [];

Route::get('/', function () {
    $arrayProducts = config("products.products");
    // dd($arrayProducts);
    foreach($arrayProducts as $product){
        if($product['badges'][0]['type'] === "discount"){
            $discount = str_replace('-', '', $product['badges'][0]['value']);
            $discount = str_replace("%","",$product['badges'][0]['value']);
            // $arrayDiscount [] = $product['badges'][0]['value'];
        }elseif( isset($product['badges'][1]['type'])){
            $discount = str_replace('-', '', $product['badges'][1]['value']);
            $discount = str_replace("%","",$product['badges'][1]['value']);
            // $arrayDiscount [] = $product['badges'][1]['value'];
            dd($discount);
        } else {
            break;
        }
            $priceDiscount = $product['price'];
            $priceDiscount = bcdiv($priceDiscount,1,2);
            $arrayDiscount [] = $priceDiscount;
        }
        
    dd($arrayDiscount);
    return view('home', compact('arrayProducts'));
})->name('home');

Route::get('donna', function () {
    return view('donna');
})->name('donna');

Route::get('uomo', function () {
    return view('uomo');
})->name('uomo');

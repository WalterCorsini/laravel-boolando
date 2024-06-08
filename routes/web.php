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
    foreach($arrayProducts as $key => $product){
        if($product['badges'][0]['type'] === "discount"){
            $discount = str_replace(array('-','%'), '', $product['badges'][0]['value']);
            // $arrayDiscount [] = $product['badges'][0]['value'];
        }elseif( isset($product['badges'][1]['type'])){
            $discount = str_replace(array('-','%'), '', $product['badges'][1]['value']);
            // $arrayDiscount [] = $product['badges'][1]['value'];
        } else {
            break;
        }
            $priceDiscount = $product['price'] - ($product['price'] * $discount / 100);
            $priceDiscount = bcdiv($priceDiscount,1,2);
            // $arrayDiscount [] = $priceDiscount;
            $arrayProducts[$key]['badges'][0]['priceDiscount'] = $priceDiscount;
            }

    return view('home', compact('arrayProducts'));
})->name('home');

Route::get('donna', function () {
    return view('donna');
})->name('donna');

Route::get('uomo', function () {
    return view('uomo');
})->name('uomo');

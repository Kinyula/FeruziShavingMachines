<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\PhoneNumber;

class ShopController extends Controller
{
    public function index(){

        $productImages = Product::with(['product_category'])->get();
        $phoneNumber = PhoneNumber::first();
        return view('shop', compact('productImages', 'phoneNumber'));
    }
}

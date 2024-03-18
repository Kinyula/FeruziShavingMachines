<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use App\Models\AboutText;


class DasshboardController extends Controller
{
    public function index()
    {
        $productImage = Product::get();
        $AboutText = AboutText::get();

        $profileImage = User::where('id', auth()->user()->id)->first();
        return view('dashboard', compact('productImage', 'profileImage', 'AboutText'));
    }

    public function deleteProduct($id)
    {
        $delete_product = Product::where("id", $id)->exists() ? Product::findOrFail($id)->delete() : false;
        $message = "Product is deleted successfully.";

        return back()->with(['message', $message]);
    }
}

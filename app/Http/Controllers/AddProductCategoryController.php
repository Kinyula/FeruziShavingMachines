<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddProductCategoryController extends Controller
{
    public function index()
    {
        return view('add-product-category');
    }
}

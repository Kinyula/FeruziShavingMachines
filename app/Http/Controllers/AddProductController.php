<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddProductController extends Controller
{
    public function index()
    {
        return view('add-product');
    }
}

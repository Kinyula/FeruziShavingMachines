<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditProductController extends Controller
{
    public function index($id)
    {
        return view('edit-products', compact('id'));
    }
}


<?php

namespace App\Http\Controllers;

use App\Models\AboutText;
use App\Models\Product;
use Illuminate\Http\Request;

class FrontEndLayoutController extends Controller
{
    public function index()
    {

        return view('layouts.front-end-layout');
    }
}

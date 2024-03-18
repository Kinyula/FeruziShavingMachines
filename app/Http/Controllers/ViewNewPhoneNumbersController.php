<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewNewPhoneNumbersController extends Controller
{
    public function index(){
        return view('view-new-phone-numbers');
    }
}

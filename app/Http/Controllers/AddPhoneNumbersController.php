<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddPhoneNumbersController extends Controller
{
    public function index(){
        return view('add-phone-numbers');
    }
}

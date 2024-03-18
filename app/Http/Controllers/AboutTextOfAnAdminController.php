<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutTextOfAnAdminController extends Controller
{
    public function index(){
        return view('about-text-of-an-admin');
    }
}

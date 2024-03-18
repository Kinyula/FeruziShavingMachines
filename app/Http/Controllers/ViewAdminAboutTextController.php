<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewAdminAboutTextController extends Controller
{
    public function index(){
        return view('view-admin-about-text');
    }
}

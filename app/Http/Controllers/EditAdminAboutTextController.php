<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditAdminAboutTextController extends Controller
{
    public function index($id)
    {
        return view('edit-admin-about-text', compact('id'));
    }
}

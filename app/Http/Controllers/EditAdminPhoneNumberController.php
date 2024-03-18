<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditAdminPhoneNumberController extends Controller
{
    public function index($id)
    {

        return view('edit-admin-phone-numbers', compact('id'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function index() {
        return view("form");
    }


    public function register (request $request) {

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'confirm_password' => 'required|same:password', // Ensure cpassword matches the password field
        ]);
        
        echo "<pre>";
        print_r($request->all());
        
    }
}

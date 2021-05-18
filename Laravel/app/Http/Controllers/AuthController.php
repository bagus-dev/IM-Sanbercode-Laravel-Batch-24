<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function welcome(Request $request)
    {
        $first_name = $request->input('first_name');
        $last_name = $request->input('last_name');
        $name = $first_name." ".$last_name;

        return view('welcome', compact('name'));
    }
}

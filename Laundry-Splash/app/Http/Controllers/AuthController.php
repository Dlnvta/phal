<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('Login-Page.login');
    }

    public function registrasi()
    {
        return view('Login-Page.registrasi');
    }
}

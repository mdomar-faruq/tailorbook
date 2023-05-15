<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Login()
    {
        return view('login');
    }


    public function tailore_login(Request $request)
    {

        //user hoile next processs, na hoile login koru again
        //dashboard 

        return $request;
    }

    public function register()
    {
        return view('register');
    }

    public function tailore_register(Request $request)
    {
        return $request;
    }
}

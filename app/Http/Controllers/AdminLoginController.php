<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

class AdminLoginController extends Controller
{

    public function show() {
        return view ('layouts.loginPage');
    }

    public function login() {
        if(Auth::user()->id==1) {
            return view ('layouts.adminPage');
        }

        // return view ('layouts.loginPage');

    }

    public function confirmLogin() {
        if(Auth::check()) {
            $isLoggedin = true;
            return view ('layouts.adminPage');
        }

        return view ('layouts.loginPage');
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function bball() {
        return view ('layouts.basketball');
    }


    public function j23() {
        return view ('layouts.jordan');
    }
}

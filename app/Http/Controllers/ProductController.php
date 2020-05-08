<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showBasketball() {
        return view ('layouts.basketball');
    }


    public function showJordan() {
        return view ('layouts.jordan');
    }








}

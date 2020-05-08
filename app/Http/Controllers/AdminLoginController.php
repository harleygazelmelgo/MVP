<?php

namespace App\Http\Controllers;

use App\Products;
use Illuminate\Http\Request;

use Auth;

class AdminLoginController extends Controller
{

    public function newItems() {

        return view ('layouts.dashboard');

        }


}










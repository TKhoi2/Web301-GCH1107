<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class Login extends Controller
{
    public function login(){
        return view('login', $data);
    }
}   

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloWordController extends Controller
{
    public function index (){
        return view("hello.index");
    }

    public function perkenalan($name) {
        return view("hello.perkenalan", compact("name"));
    }
}

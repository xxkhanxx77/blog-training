<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index() 
    { 
        $name = ['john','sara' ,'date' ];

        return view('show',compact('name'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class democontroller extends Controller
{
    public function index(){
        return view('index');
    }
}

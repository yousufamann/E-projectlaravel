<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Testercontroller extends Controller
{
    public function index(){
        return view('tester.index');
    }
}

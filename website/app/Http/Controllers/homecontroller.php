<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homecontroller extends Controller
{
   public function index(){
     return view('home.index');
   }

   public function about(){
     return view('home.About');
   }

   public function contact(){
    return view('home.contact');
   }

   public function product(){
    return view('home.products');
   }

   public function test(){
    return view('home.Test');
   }
}

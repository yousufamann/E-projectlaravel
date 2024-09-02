<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class AdminController extends Controller
{
    function index(){
        if(Auth::user()->status == 'Active'){
            if(Auth::user()->role == 'Admin'){
                return view('admin.index');
            }
            elseif(Auth::user()->role == 'Tester'){
                return view('Tester.index');
            }
            else{
                return redirect('/');
            }
        }
        else{
            return redirect('/login');
        }
    }

    function addproduct(){
        return view('admin.addproducts');
    }

    function addtesting(){
        return view('admin.addtestingtypes');
    }
}

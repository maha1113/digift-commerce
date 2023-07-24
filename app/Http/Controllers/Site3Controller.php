<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Site3Controller extends Controller
{
    public function index(){
        return view('site3assets.index');
    }


    public function about(){
        return view('site3assets.about');
    }

    public function contact(){
        return view('site3assets.contact');
    }

    public function furniture(){
        return view('site3assets.furniture');
    }

    public function shop(){
        return view('site3assets.shop');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class allpagescontroller extends Controller
{
    public function index(){
    	return view ('Frontend.homepage');
    }
}
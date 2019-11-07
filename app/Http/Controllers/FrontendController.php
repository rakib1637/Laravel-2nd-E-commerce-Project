<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
     public function frontend(){
    	return view ('Frontend.homepage');
    }
    public function signup(){
    	return view ('Frontend.pages.register');
    }
}

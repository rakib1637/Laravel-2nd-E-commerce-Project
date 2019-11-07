<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminpageController extends Controller
{
	//Admin Homepage
    public function index (){
    	return view ('adminpanel.pages.homepage');
    }
    public function logout(){
    	return view ('adminpanel.pages.login');
    }
    public function createproduct(){
    	return view('adminpanel.pages.products.createproduct');
    }
}

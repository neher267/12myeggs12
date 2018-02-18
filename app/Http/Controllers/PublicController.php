<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
     public function index()
    {
        return view('frontend.index');
    }

    public function products($category)
    {
    	return view('frontend.products');
    }

    public function details()
    {
    	return view('frontend.details');
    }
}

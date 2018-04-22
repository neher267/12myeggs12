<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Settings\Category;

class PublicController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy('name', 'asc')->get();
        return view('frontend.index', compact('categories'));
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

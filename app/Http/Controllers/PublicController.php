<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Settings\Category;
use App\Models\Hr\Product;

class PublicController extends Controller
{
    public function index()
    {
        //$categories = Category::orderBy('name', 'asc')->get();
        $categories = Category::orderBy('name', 'asc')->where('id', '>', 100)->get();
        return view('frontend.index', compact('categories'));
    }

    public function category_types(Category $category)
    {
        $products = $category->products()->with('packages')->get();

        return view('frontend.category-products', compact('products'));
    }

    public function details()
    {
    	return view('frontend.details');
    }
}

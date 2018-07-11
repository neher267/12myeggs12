<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Settings\Category;
use App\Models\Hr\Product;
use App\Models\Hr\Package;

class PublicController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy('name', 'asc')->get();
        //$categories = Category::orderBy('name', 'asc')->where('id', '>', 100)->get();
        return view('frontend.index', compact('categories'));
    }

    public function category_types(Category $category)
    {
        $products = $category->products()->with('packages')->get();

        return view('frontend.category-products', compact('products'));
    }

    public function product_packages(Product $product) {
        $packages = $product->packages()->get();
        return view('frontend.packages', compact('packages'));        
    }

    public function package_details($title, Package $package) {
        $images = $package->images()->where('type', 'Details')->get();
        return view('frontend.package-details', compact('images' ,'package'));        
    }   

    public function details()
    {
    	return view('frontend.details');
    }
}

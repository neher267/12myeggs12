<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Settings\Category;
use App\Models\Hr\Product;
use App\Models\Hr\Package;
use App\Models\Settings\Gift;

class PublicController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy('name', 'asc')->get()->chunk(4);
        $popular = Category::orderBy('name', 'asc')->get()->chunk(4);
        //$categories = Category::orderBy('name', 'asc')->where('id', '>', 100)->get();
        return view('frontend.index', compact('categories'));
    }



    public function gifts()
    {

        $user = request()->user();
        $claims = array();

        if($user)
        {
            $claims = Gift::where('points', '<=', $user->points)->orderBy('points', 'des')->get()->chunk(4);
            $gifts = Gift::where('points', '>', $user->points)->orderBy('points', 'asc')->get()->chunk(4);        
        }
        else {
            $gifts = Gift::orderBy('points', 'des')->get()->chunk(4);  
        } 

        return view('frontend.gifts', compact('gifts', 'claims'));
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

    public function gift_details(Gift $gift) {
        $images = $gift->images()->where('type', 'Details')->get();
        return view('frontend.gift-details', compact('images' ,'gift'));        
    }  

    public function details()
    {
    	return view('frontend.details');
    }
}

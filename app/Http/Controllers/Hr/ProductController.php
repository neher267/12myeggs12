<?php

namespace App\Http\Controllers\Hr;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Image;
use App\Models\Hr\Product;
use App\Models\Settings\Category;

class ProductController extends Controller
{
    private $path = "images/products";
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::where('for_sale', true)->orderBy('name', 'asc')->get();
        $title = "All Products";
        return view('backend.hr.product.index', compact('products', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::orderBy('name', 'asc')->get();
        return view('backend.hr.product.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product;
        $product->name = $request->name;
        $product->category()->associate($request->category_id);
        $product->unit = $request->unit;
        $product->for_sale = true;
        $product->save();

        $image = new Image;
        $image->type = 'profile';
        $image->src = 'images/'.time().'jpg';
        $product->images()->save($image);            
        return redirect()->back()->withSuccess('Create Success!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }    

    public function images($id)
    {
        $product = Product::find($id);
        $images = $product->images()->get();
        $title = $product->name." All Images";
        return view('backend.hr.images.index', compact('images', 'product', 'title'));
    }

    public function images_create($id)
    {
        $product = Product::find($id);
        $title = $product->name.": Add Images";
        return view('backend.hr.images.create', compact('product', 'title'));
    }

    public function images_store(Request $request, $id)
    {
        $request->validate(['src' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:100']);
        $imageName = time().'.'.$request->src->getClientOriginalExtension();
        $request->src->move(public_path($this->path), $imageName);
        
        $product = Product::find($id);        
        $image = new Image;
        $image->type = $request->type;
        $image->src = $this->path.'/'.$imageName;
        $product->images()->save($image);  

        return back()->withSuccess('You have successfully upload image.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        $title = 'Edit '.$product->name;
        $categories = Category::orderBy('name', 'asc')->get();
        return view('backend.hr.product.edit', compact('categories','title', 'product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->name = $request->name;
        $product->category()->associate($request->category_id);
        $product->unit = $request->unit;
        $product->for_sale = true;
        $product->save();

        return redirect("products")->withSuccess("Edit Successful!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }
}

<?php

namespace App\Http\Controllers\Hr;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Image;
use App\Models\Hr\Package;
use App\Models\Hr\Product;

class ProductPackageImageController extends Controller
{
    private $path = "images/products/packages";
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($product_id, $imageable_id)
    {
        $imageable = Package::find($imageable_id);
        $images = $imageable->images()->get();        
        $title = $imageable->packageable->name.'->'.$imageable->title."-> All Images";
        $add_url = "products/$product_id/packages/$imageable_id/images/create";
        $back_url = "products/$product_id/packages";
        return view('backend.hr.images.index', compact('images', 'imageable', 'title', 'add_url', 'back_url'));
    }       


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($product_id, $imageable_id)
    {
        $imageable = Package::find($imageable_id);
        $title = $imageable->packageable->name.'->'.$imageable->title."-> Add Image";

        $url = "products/$product_id/packages/$imageable_id/images";

        return view('backend.hr.images.create', compact('url', 'title', 'imageable_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(['src' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:100']);
        $imageName = time().'.'.$request->src->getClientOriginalExtension();
        $request->src->move(public_path($this->path), $imageName);
        
        $imageable = Package::find($request->id);   
        $image = new Image;
        $image->type = $request->type;
        $image->src = $this->path.'/'.$imageName;
        $imageable->images()->save($image);  

        return back()->withSuccess('You have successfully upload image.');
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

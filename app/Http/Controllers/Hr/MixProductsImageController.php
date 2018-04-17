<?php

namespace App\Http\Controllers\Hr;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Hr\MixPackage;
use App\Image;

class MixProductsImageController extends Controller
{
        private $path = "images/MixProducts";
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $product = MixPackage::find($id);
        $images = $product->images()->get();
        $title = $product->name." All Images";
        return view('backend.hr.mix-products.images.index', compact('images', 'product', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $product = MixPackage::find($id);
        $images = $product->images()->get();      
        $title = $product->name.": Add Images";
        return view('backend.hr.mix-products.images.create', compact('images', 'product', 'title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $request->validate(['src' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:100']);
        $imageName = time().'.'.$request->src->getClientOriginalExtension();
        $request->src->move(public_path($this->path), $imageName);
        
        $product = MixPackage::find($id);        
        $image = new Image;
        $image->type = $request->type;
        $image->src = $this->path.'/'.$imageName;
        $product->images()->save($image);  

        return back()->withSuccess('You have successfully add an image.');
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
    public function edit($product_id, $image_id)
    {
        $image = Image::find($image_id);
        $title = $image->imageable->name.': Edit Mix Products';
        return view('backend.hr.mix-products.images.edit', compact('title', 'product_id', 'image'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $product_id, $image_id)
    {
        if(!empty($request->src))
        {
            $request->validate(['src' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:500']);

            unlink($request->avatar);
            $imageName = time().'.'.$request->src->getClientOriginalExtension();
            $request->src->move(public_path($this->path), $imageName);
            $image = Image::find($image_id);
            $image->type = $request->type;
            $image->src = $this->path.'/'.$imageName;
            $image->save();
        }
        else
        {
            $image = Image::find($image_id);
            $image->type = $request->type;
            $image->save();
        }

        return redirect("mix-products/$product_id/images")->withSuccess('Update success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $product_id, $image_id)
    {
        unlink($request->avatar);
        $image = Image::find($image_id)->delete();
        return back()->withSuccess("Delation Success!");
    }   

}

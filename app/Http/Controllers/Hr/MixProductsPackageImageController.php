<?php

namespace App\Http\Controllers\Hr;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Image;
use App\Models\Hr\Package;
use App\Models\Hr\MixProducts;

class MixProductsPackageImageController extends Controller
{
    private $path = "images/MixProductsImages";
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($product_id, $package_id)
    {
        $package = Package::find($package_id);
        $images = $package->images()->get();        
        $title = $package->packageable->name.'->'.$package->title."-> All Images";
        return view('backend.hr.mixProducts-packages.images.index', compact('images', 'title', 'product_id', 'package_id'));
    }       


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($product_id, $package_id)
    {
        $package = Package::find($package_id);
        $images = $package->images()->get();        
        $title = $package->packageable->name.'->'.$package->title."-> Add Image";        
        return view('backend.hr.mixProducts-packages.images.create', compact('title', 'product_id', 'package_id', 'images'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $product_id, $package_id)
    {
        $request->validate(['src' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:100']);
        $imageName = time().'.'.$request->src->getClientOriginalExtension();
        $request->src->move(public_path($this->path), $imageName);
        
        $package = Package::find($package_id);

        $image = new Image;
        $image->type = $request->type;
        $image->src = $this->path.'/'.$imageName;
        $package->images()->save($image); 

        $images = $package->images();

        return back()->with(compact('images'))->withSuccess('You have successfully save an image.');
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
    public function edit($product_id, $package_id, $image_id)
    {
        $image = Image::find($image_id);
        $package = Package::find($package_id);
        $title = $package->packageable->name.'->'.$package->title."-> Edit Image";
        return view('backend.hr.mixProducts-packages.images.edit', compact('title', 'product_id', 'package_id','image'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $product_id, $package_id, $image_id)
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

        return redirect("MixProductss/$product_id/packages/$package_id/images")->withSuccess('Update success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $product_id, $package_id, $image_id)
    {
        unlink($request->avatar);
        $image = Image::find($image_id)->delete();
        return back()->withSuccess("Delation Success!");
    }
}

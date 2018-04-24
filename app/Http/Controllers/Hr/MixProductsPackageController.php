<?php

namespace App\Http\Controllers\Hr;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Image;
use App\Models\Hr\Package;
use App\Models\Hr\MixProducts;

class MixProductsPackageController extends Controller
{
    private $path = "images/MixProductsPackages";

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $product = MixProducts::find($id);
        $packages = $product->packages()->get();
        $title = $product->name.": All Packages";
        return view('backend.hr.mixProducts-packages.index', compact('packages', 'product','title'));     
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $product = MixProducts::find($id);
        $title = $product->name.": Add Package";
        return view('backend.hr.mixProducts-packages.create', compact('product', 'title'));
    }
   

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $mix_products = MixProducts::find($id);
        $imageName = time().'.'.$request->src->getClientOriginalExtension();

        $package = new Package;
        $package->title = $request->title;
        $package->description = $request->description;
        $package->thumbnail = $this->path.'/'.$imageName; 
        $mix_products->packages()->save($package);

        $request->src->move(public_path($this->path), $imageName);
        $image = new Image;
        $image->type = 'Thumbnail';
        $image->src = $this->path.'/'.$imageName;
        $package->images()->save($image);

        return redirect()->back()->withSuccess('Saved Successfully!');
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

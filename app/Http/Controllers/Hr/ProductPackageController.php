<?php

namespace App\Http\Controllers\Hr;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Image;
use App\Models\Hr\Package;
use App\Models\Hr\Product;

class ProductPackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $packages = Package::where('packageable_type', 'product')->get();
        return view('backend.hr.package.index', compact('packages'));
    }

    public function create()
    {
        //
    }

    public function add_package($id)
    {
        $package_for = Product::find($id);
        $title = "Create Package For: ".$package_for->name;
        return view('backend.hr.product-package.create', compact('package_for', 'title'));
    }

    


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $package = new Package;
        $package->title = $request->title;
        $package->description = $request->description;
        $product = Product::find($request->product_id);
        $product->packages()->save($package);

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
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $package = Package::find($id);
        $title = "Edit ".$package->packageable->name. " Package";
        return view('backend.hr.product-package.edit', compact('package', 'title'));
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
        $package = Package::find($id);
        $package->title = $request->title;
        $package->description = $request->description;
        $package->save();
        $product = $package->packageable->id;
        
        return redirect("products/$product/packages")->withSuccess('Update Successfully!');
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

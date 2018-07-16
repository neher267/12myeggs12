<?php

namespace App\Http\Controllers\Hr;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Settings\Category;
use App\Models\Hr\MixProduct;
use App\Models\Hr\Package;
use App\Image;


class MixProductsController extends Controller
{
    private $path = "images/MixProduct";

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $packages = MixProduct::orderBy('name', 'asc')->get();
        return view('backend.hr.mix-products.index', compact('packages'));
    }

    /**

     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.hr.mix-products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $imageName = time().'.'.$request->src->getClientOriginalExtension();

        $mix_package = new MixProduct;
        $mix_package->name = $request->name;
        $slug = strtolower(str_replace(' + ', '+', $request->name));
        $mix_package->slug = str_replace(' ', '-', $slug);

        $mix_package->thumbnail = $this->path.'/'.$imageName; 
        $mix_package->save();

        $request->src->move(public_path($this->path), $imageName);
        $image = new Image;
        $image->type = 'Thumbnail';
        $image->src = $this->path.'/'.$imageName;
        $mix_package->images()->save($image);

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
    public function edit(MixProduct $mix_product)
    {
        $title = 'Edit '.$mix_product->name;
        $categories = Category::orderBy('name', 'asc')->get();
        return view('backend.hr.mix-products.edit', compact('categories','title', 'mix_product'));
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

<?php

namespace App\Http\Controllers\Settings;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Image;
use App\Models\Settings\Category;

class CategoryImageController extends Controller
{
    private $path = "images/categorys";
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $category = Category::find($id);
        $images = $category->images()->get();
        $title = $category->name." All Images";
        return view('backend.settings.category.images.index', compact('images', 'category', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $category = Category::find($id);
        $images = $category->images()->get();      
        $title = $category->name.": Add Images";
        return view('backend.settings.category.images.create', compact('images', 'category', 'title'));
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
        
        $category = Category::find($id);        
        $image = new Image;
        $image->type = $request->type;
        $image->src = $this->path.'/'.$imageName;
        $category->images()->save($image);  

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
    public function edit($category_id, $image_id)
    {
        $image = Image::find($image_id);
        $title = $image->imageable->name.': Edit Image';
        return view('backend.settings.category.images.edit', compact('title', 'category_id', 'image'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $category_id, $image_id)
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

        return redirect("categorys/$category_id/images")->withSuccess('Update success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $category_id, $image_id)
    {
        unlink($request->avatar);
        $image = Image::find($image_id)->delete();
        return back()->withSuccess("Delation Success!");
    }
}

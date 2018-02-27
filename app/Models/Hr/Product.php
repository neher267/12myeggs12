<?php

namespace App\Models\Hr;

use Illuminate\Database\Eloquent\Model;
use App\Image;
use App\Models\Settings\Category;

class Product extends Model
{
    public function category()
    {
    	return $this->belongsTo(Category::class);
    }

    public function images()
    {
    	return $this->morphMany(Image::class, 'imageable');
    }

    public function packages()
    {
    	return $this->morphMany(Package::class, 'packageable');
    }
}

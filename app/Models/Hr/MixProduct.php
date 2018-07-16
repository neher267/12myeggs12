<?php

namespace App\Models\Hr;

use Illuminate\Database\Eloquent\Model;
use App\Image;


class MixProduct extends Model
{
	public function getRouteKeyName()
    {
        return 'slug';
    }

    public function packages()
    {
    	return $this->morphMany(Package::class, 'packageable');
    }

    public function images()
    {
    	return $this->morphMany(Image::class, 'imageable');
    }
}

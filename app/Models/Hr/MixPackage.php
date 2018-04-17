<?php

namespace App\Models\Hr;

use Illuminate\Database\Eloquent\Model;
use App\Image;


class MixPackage extends Model
{

    public function packages()
    {
    	return $this->morphMany(Package::class, 'packageable');
    }

    public function images()
    {
    	return $this->morphMany(Image::class, 'imageable');
    }
}

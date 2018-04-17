<?php

namespace App\Models\Settings;

use Illuminate\Database\Eloquent\Model;
use App\Image;

class Gift extends Model
{
    protected $fillable = ['name', 'points'];

    public function images()
    {
    	return $this->morphMany(Image::class, 'imageable');
    }
}

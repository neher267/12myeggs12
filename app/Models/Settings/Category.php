<?php

namespace App\Models\Settings;

use Illuminate\Database\Eloquent\Model;
use App\Models\Hr\Product;

class Category extends Model
{
    public function products()
    {
    	return $this->hasMany(Product::class);
    }
}

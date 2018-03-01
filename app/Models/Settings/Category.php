<?php

namespace App\Models\Settings;

use Illuminate\Database\Eloquent\Model;
use App\Models\Hr\Product;
use App\Models\Settings\Department;

class Category extends Model
{
    public function products()
    {
    	return $this->hasMany(Product::class);
    }

    public function department()
    {
    	return $this->belongsTo(Department::class);
    }
}

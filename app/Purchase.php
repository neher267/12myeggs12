<?php

namespace App;
use App\Models\Hr\Product;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    public function product()
    {
    	return $this->belongsTo(Product::class);
    }
}

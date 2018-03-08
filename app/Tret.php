<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Models\Hr\Product;
use App\Models\Settings\Branch;

class Tret extends Model
{
    public function product()
    {
    	return $this->belongsTo(Product::class);
    }

    public function branch()
    {
    	return $this->belongsTo(Branch::class);
    }
}

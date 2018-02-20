<?php

namespace App\Models\Settings;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $fillable = ['name', 'slug'];

    public function areas()
    {
    	return $this->hasMany(Area::class);
    }
}

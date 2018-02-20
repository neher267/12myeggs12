<?php

namespace App\Models\Settings;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    
    public function district()
    {
    	return $this->belongsTo(District::class);
    }
}

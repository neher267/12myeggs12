<?php

namespace App\Models\Hr;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    public function packageable()
    {
    	return $this->morphTo();
    }
}

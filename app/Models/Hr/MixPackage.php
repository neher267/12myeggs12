<?php

namespace App\Models\Hr;

use Illuminate\Database\Eloquent\Model;

class MixPackage extends Model
{

    public function packages()
    {
    	return $this->morphMany(Package::class, 'packageable');
    }
}

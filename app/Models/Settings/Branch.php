<?php

namespace App\Models\Settings;

use Illuminate\Database\Eloquent\Model;
use App\Address;

class Branch extends Model
{
    public function address()
    {
    	return $this->belongsTo(Address::class);
    }
}

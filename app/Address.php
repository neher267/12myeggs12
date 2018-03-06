<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Models\Settings\Area;

class Address extends Model
{	
        protected $fillable = ['area_id', 'block',  'road_no', 'house_no', 'house_name', 'floor'];

        public function area()
        {
        	return $this->belongsTo(Area::class);
        }
    
}

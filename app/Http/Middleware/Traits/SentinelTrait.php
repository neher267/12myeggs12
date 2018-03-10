<?php

namespace App\Http\Middleware\Traits;

use Sentinel;

trait SentinelTrait
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function authorize($role)
    {
        $slug = Sentinel::getUser()->roles()->first()->slug;
        if($slug === strtolower($role))
        	return true;
        else 
        	return false;
    }
}

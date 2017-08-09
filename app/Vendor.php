<?php

namespace api;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    public function sale(){
    	return $this->hasOne('api\Sale','id');
    }

    public function listVendors()
    {
        return $this->all();
    }
}

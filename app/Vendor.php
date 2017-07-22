<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    public function sale(){
    	return $this->hasOne('App\Sale','id');
    }

    public function listVendors()
    {
        return $this->all();
    }
}

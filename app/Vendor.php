<?php

namespace api;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    public function sale(){
    	return $this->belogsTo('api\Sale');
    }

    public function listVendors()
    {
        return $this->all();
    }

    public function listVendor($id)
    {
        return $this->find($id);
    }
}

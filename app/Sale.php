<?php

namespace api;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $fillable = ['vendor_id', 'price', 'comission', 'name'];

    public function vendor()
    {
    	return $this->hasMany('api\Vendor');
    }

    public function listSales()
    {
        return $this->all();
    }

    public function listSale($id)
    {
        $sale = $this->where('id', $id)->get();

        return $sale;
    }

    public function insert($request)
    {
        $request['comission'] = $request['price'] * 0.085;

        $sale = $this->create($request);

        return $this->informationVendor($sale->attributes['id']);
    }

    public function informationVendor($idSale)
    {
        return $this->join('vendors', 'vendors.id', '=', 'sales.vendor_id')
                    ->where('sales.id', $idSale)
                    ->select('vendors.name', 'vendors.email', 'sales.name', 'sales.price', 'sales.comission')
                    ->get();
    }
}

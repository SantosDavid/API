<?php

namespace api\Http\Controllers;

use Illuminate\Http\Request;
use api\Vendor;

class VendorsController extends Controller
{
    protected $vendor;

    public function __construct()
    {
        $this->vendor = new Vendor();
    }

    public function listVendors()
    {
        $vendors = $this->vendor->listVendors();

        return response()->json($vendors);
    }

    public function listVendor($id)
    {
        $vendor = $this->vendor->listVendor($id);
        
        return $vendor;
    }
}

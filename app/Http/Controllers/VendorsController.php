<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vendor;

class VendorsController extends Controller
{
    protected $vendor;

    public function __construct()
    {
        $this->vendor = new Vendor();
    }
    public function listVendors()
    {
        $vendors['list_vendors'] = $this->vendor->listVendors();

        return response()->json($vendors);
    }
}

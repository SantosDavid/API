<?php

namespace App\Http\Controllers;

use App\Sale;
use Illuminate\Http\Request;

class SalesController extends Controller
{
    protected $sale;

    public function __construct()
    {
        $this->sale = new Sale();
    }

    public function listSales()
    {
        $sales['list_sales'] = $this->sale->listSales();

        return response()->json($sales);
    }

    public function insert(Request $request)
    {
        $vendorInformation = $this->sale->insert($request->all());

        return response()->json($vendorInformation);
    }
}

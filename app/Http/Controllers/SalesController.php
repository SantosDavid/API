<?php

namespace api\Http\Controllers;

use api\Sale;
use Illuminate\Http\Request;
use api\Http\Requests\SaleRequest;
use Illuminate\Support\Facades\Validator;

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

        if ($sales) {
            return response()->json($sales);
        }

        return response()->json('erro', 404);
    }

    public function listSale(int $id)
    {
        $sale = $this->sale->listSale($id);

        if ($sale != '[]') {
            return $sale;
        }

        return response()->json('erro', 404);
    }

    public function insert(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'vendor_id' => 'required|numeric',
                'price'     => 'required|numeric',
                'name'      => 'required|string',
            ]);

        if ($validator->fails())
        {
            return response()
                ->json($validator->errors());
        }

        return response()
            ->json($this->sale->insert($request));
    }
}

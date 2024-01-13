<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use Illuminate\Support\Facades\DB;

class SaleController extends Controller
{

    public function __invoke()
    {

        //IN NULL
        //OUT view with Object Collection
        $sales = Sale::select('service_id', DB::raw('sum(quantity) as quantity'))->groupBy('service_id')->with('service')->get();

        return view('sale', compact('sales'));
    }
}

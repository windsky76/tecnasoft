<?php

namespace App\Http\Controllers;

use App\Models\Point;
use App\Models\Service;
use App\Http\Requests\StorePointRequest;
use App\Http\Requests\StorePriceList;
use App\Http\Requests\UpdatePointRequest;
use App\Models\PriceList;

class PointController extends Controller
{

    public function index()
    {
        //IN NUll
        //OUT Object Collection
        $points = Point::orderBy('name')->with('priceLists','priceLists.service')->get();

        return view('points.index', compact('points'));
    }

    public function create()
    {
        //IN NUll
        //OUT view
        return view('points.create');
    }

    public function store(StorePointRequest $request)
    {
        //IN Request whit rules
        //OUT view with flash message
        Point::firstOrCreate(['name' => $request->name]);
        return redirect()->route('point.index')->with('message','Point Created');
    }

    public function edit(Point $point)
    {
        //IN Object Collection
        //OUT view with Object Collection
        $result = $point->where('id',$point->id)->with('priceLists','priceLists.service')->first();
        return view('points.edit',[ 'point' => $result ]);
    }


    public function update(UpdatePointRequest $request, Point $point)
    {
        //IN Request whit rules and Object Collection
        //OUT view with flash message
        $point->fill($request->post())->save();
        return redirect()->route('point.index')->with('message','Point Updated');
    }

    public function destroy(Point $point)
    {
        //IN Object Collection
        //OUT view with flash message
        $point->delete();
        $point->priceLists()->delete();

        return redirect()->route('point.index')->with('message','Point Deleted');
    }

    
}

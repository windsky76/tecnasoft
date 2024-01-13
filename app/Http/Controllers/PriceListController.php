<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\PriceList;
use App\Http\Requests\StorePriceListRequest;
use App\Http\Requests\UpdatePriceListRequest;

class PriceListController extends Controller
{

    public function show($id)
    {
        //IN int
        //OUT view with Object Collection
        session(['point_id' => $id]);
        $services = Service::orderBy('name')->get();
        return view('points.service', compact('services'));
    }

    public function store(StorePriceListRequest $request)
    {
        //IN Request whit rules
        //OUT view with flash message
        PriceList::updateOrCreate(
            [
                'service_id' => $request->service_id,
                'point_id' => session('point_id'),
            ],
            [
                'price' => $request->price,
                'is_active' => $request->is_active
            ]);
            session()->forget('point_id');
        return redirect()->route('point.index')->with('message','Service and Price Added');
    }

    public function edit(PriceList $priceList)
    {
        //IN Object Collection
        //OUT view with Object Collection
        return view('priceList.edit',['priceList' => $priceList->where('id',$priceList->id)->first()]);
    }

    public function update(UpdatePriceListRequest $request, PriceList $priceList)
    {
        //IN Request whit rules and Object Collection
        //OUT view with flash message
        $priceList->fill($request->post())->save();
        return redirect()->route('points.index')->with('message','Service Updated');
    }

    public function destroy(PriceList $priceList)
    {
        //IN Object Collection
        //OUT view with flash message
        $priceList->delete();
        return redirect()->route('point.index')->with('message','Service Deleted');
    }

    public function statusPriceList($id)
    {
        //IN int
        //OUT view with flash message
        $priceList = PriceList::find($id);
        $priceList->is_active = !$priceList->is_active;
        $priceList->save();
        return redirect()->route('point.index')->with('message','Service Status Updated');
    }
}

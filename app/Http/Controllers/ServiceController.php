<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Response;
use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;
use App\Models\PriceList;

class ServiceController extends Controller
{

    public function index()
    {
        //IN NUll
        //OUT Object Collection
        $services = Service::orderBy('name')->get();
        return view('services.index', compact('services'));
    }

    public function create()
    {
        //IN NUll
        //OUT view
        return view('services.create');
    }

    public function store(StoreServiceRequest $request)
    {
        //IN Request whit rules
        //OUT view with flash message
        Service::firstOrCreate(['name' => $request->name]);
        return redirect()->route('service.index')->with('message','Service Created');
    }

    public function edit(Service $service)
    {
        //IN Object Collection
        //OUT view with Object Collection
        return view('services.edit',compact('service'));
    }

    public function update(UpdateServiceRequest $request, Service $service)
    {
        //IN Request whit rules
        //OUT view with flash message
        $service->fill($request->post())->save();
        return redirect()->route('service.index')->with('message','Service Updated');
    }

    public function destroy(Service $service)
    {
        //IN Object Collection
        //OUT view with flash message
        $service->delete();
        PriceList::where('service_id',$service->id)->delete();
        return redirect()->route('service.index')->with('message','Service Deleted');
    }
}

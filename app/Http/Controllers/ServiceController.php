<?php

namespace App\Http\Controllers;

use App\Models\challenge6\Service;
use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::all();
        return view('challenge6.indexService')->with('services',$services);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('challenge6.createService');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreServiceRequest $request)
    {
      $service = new Service();
      $service->title = $request->input('title');
      $service->description = $request->input('description');
      $service->duration = $request->input('duration');
      $service->price = $request->input('price');
      
      
      if($request->hasFile('image')){
          $fileImage = time().'_'. $request->file('image')->getClientOriginalName();
          $path = $request->file('image')->storeAs('images', $fileImage, 'public');
          $service->image = '/storage/' . $path;
      }
      $service->save();
    return redirect('/services')->with('success', 'Service ajouté avec succès');
      
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateServiceRequest $request, Service $service)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        //
    }
}

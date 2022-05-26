<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Truck;

class TrucksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trucks = Truck::all();
        return view ('admin.trucks.index')->with('trucks', $trucks);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.trucks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

        public function store(Request $request)
    {   
        $this->validate($request, [
        'truck_type_tk' => 'required',
        'truck_type_ru' => 'required',
        'truck_type_en' => 'required',
        'capacity' => 'required|numeric',
        'price_hour_normal' => 'required|numeric',
        ]);
        $data = $request->all();
        Truck::create($data);
        return redirect()->route('trucks.index')->with('success', 'Truck created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $truck = Truck::find($id);
        return view('admin/trucks.show')->with('truck', $truck);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $truck = Truck::find($id);
        return view('admin/trucks.edit')->with('truck', $truck);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
        'truck_type_tk' => 'required',
        'truck_type_ru' => 'required',
        'truck_type_en' => 'required',
        'capacity' => 'required|numeric',
        'price_hour_normal' => 'required|numeric',
        ]);
        $truck = Truck::find($id);
        $data = $request->all();
        $truck->update($data);
        return redirect('admin/trucks')->with('success', 'Truck Updated!');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Truck::destroy($id);
        return redirect('admin/trucks')->with('info','Truck deleted!');  
    }
}

<?php

namespace App\Http\Controllers;
use App\Models\Parcel;
use Illuminate\Http\Request;

class ParcelController extends Controller
{

    public function index()
    {
        $parcels = Parcel::all();
      return view ('parcels.index')->with('parcels', $parcels);
    }


    public function create()
    {
        return view('parcels.create');
    }


    public function store(Request $request)
    {
        $input = $request->all();
        Parcel::create($input);
        return redirect('parcel')->with('flash_message', 'Package Addedd!');
    }


    public function show($pcl_id)
    {
        $parcel = Parcel::find($pcl_id);
        return view('parcels.show')->with('parcels', $parcel);
    }


    public function edit($pcl_id)
    {
        $parcel = Parcel::find($pcl_id);
        return view('parcels.edit')->with('parcels', $parcel);
    }


    public function update(Request $request, $pcl_id)
    {
        $parcel = Parcel::find($pcl_id);
        $input = $request->all();
        $parcel->update($input);
        return redirect('parcel')->with('flash_message', 'Package Updated!');
    }


    public function destroy($pcl_id)
    {
        Parcel::destroy($pcl_id);
        return redirect('parcel')->with('flash_message', 'Package deleted!');
    }
}

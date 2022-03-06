<?php

namespace App\Http\Controllers;

use App\Models\House;
use App\Models\Housespic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UpdateHouse extends Controller
{
    public function index($id)
    {
        $data = House::find($id);
        return view('renter.editHouse', compact('data', 'id'));
    }

    public function update(Request $request, $id)
    {
        $house = House::find($id);
        $house->title = $request->title;
        $house->location = $request->location;
        $house->for = $request->for;
        $house->status = $request->status;
        $house->size = $request->size;
        $house->bed_rooms = $request->bedrooms;
        $house->bath_rooms = $request->bathrooms;
        $house->description = $request->description;
        $house->save();
        return redirect()->back()->with('success', 'house data updated successfully');
    }

}

<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\House;
use App\Models\Housepic;
use Illuminate\Http\Request;


class UpdateHouse extends Controller
{
    public function index($id)
    {
        $house = House::find($id);
        $customer = Customer::find($house->owner_id);
        $housepic = Housepic::where('house_id', $id)->get();

        $data = House::find($id);
        return view('renter.editHouse', compact('data', 'id', 'customer', 'housepic'));
    }

    public function update(Request $request, $id)
    {


        $images = $request->file('updateimages');
        foreach ($images as $image) {
            $name_generated = hexdec(uniqid());
            $image_extension = strtolower($image->getClientOriginalExtens());
            $image_name = $name_generated . '.' . $image_extension;
            $uplocation = 'assets/house_images/';
            $final_image = $uplocation . $image_name;
            $image->move($uplocation, $image_name);
            Housepic::find($id)->first()->update([
                'image'=>$final_image
            ]);
        }

        // $house = House::find($id);
        // $house->title = $request->title;
        // $house->location = $request->location;
        // $house->for = $request->for;
        // $house->status = $request->status;
        // $house->size = $request->size;
        // $house->bed_rooms = $request->bedrooms;
        // $house->bath_rooms = $request->bathrooms;
        // $house->description = $request->description;
        // $house->save();
        return redirect()->back()->with('success', 'house data updated successfully');
    }
}

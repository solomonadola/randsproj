<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\House;
use App\Models\Housepic;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UpdateHouse extends Controller
{
    //
    public function index($id)
    {
        $house = House::find($id);
        $customer = Customer::find($house->owner_id);
        $housepic = Housepic::where('house_id', $id)->get();

        $data = House::find($id);
        return view('renter.editHouse', compact('data', 'id', 'customer', 'housepic'));
    }
    public function index2($id)
    {
        $house = House::find($id);
        $customer = Customer::find($house->owner_id);
        $housepic = Housepic::where('house_id', $id)->get();

        $data = House::find($id);
        return view('sell.editHouse', compact('data', 'id', 'customer', 'housepic'));
    }

    public function update(Request $request, $id)
    {


        if ($request->hasfile('updateimages')) {
            $housepic = Housepic::where('house_id', $id)->get()->first();
            $housepicnums = count(Housepic::where('house_id', $id)->get());
            $housepicid = $housepic->id;
            $images = $request->file('updateimages');
            $i = 1;
            foreach ($images as $image) {
                $name_generated = hexdec(uniqid());
                $image_extension = strtolower($image->getClientOriginalExtension());
                $image_name = $name_generated . '.' . $image_extension;
                $uplocation = 'assets/house_images/';
                $final_image = $uplocation . $image_name;
                $image->move($uplocation, $image_name);
                if ($i <= $housepicnums) {
                    DB::table('housespic')
                        ->where('id', $housepicid)
                        ->update(['image' => $final_image]);
                    $i++;
                    $housepicid++;
                }
            }
        }
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


        return back()->with('success', 'product update was successful');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\House;
use App\Models\Housepic as ModelsHousepic;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB as FacadesDB;

class AddRentalHouse extends Controller
{
    public function index()
    {
        return view('renter.addrentalhouse');
    }
    public function insertHouse(Request $request)
    {
        $id = FacadesDB::select("SHOW TABLE STATUS LIKE 'houses'");
        $next_id = $id[0]->Auto_increment;


        $images = $request->file('images');
        foreach ($images as $image) {
            $name_generated = hexdec(uniqid());
            $image_extension = strtolower($image->getClientOriginalExtension());
            $image_name = $name_generated . '.' . $image_extension;
            $uplocation = 'assets/house_images/';
            $final_image = $uplocation . $image_name;
            $image->move($uplocation, $image_name);
            ModelsHousepic::insert([
                'house_id' => $next_id,
                'image' => $final_image,
                'created_at' => Carbon::now(),

            ]);
        }

        House::insert([
            'owner_id' => $request->owner_id,
            'title' => $request->title,
            'location' => $request->location,
            'house_id' => 0,
            'image' => '0',
            'price' => $request->price,
            'for' => $request->for,
            'status' => $request->status,
            'bed_rooms' => $request->bedrooms,
            'bath_rooms' => $request->bathrooms,
            'size' => $request->size,
            'description' => $request->description

        ]);
        return Redirect()->back()->with('success', 'new house was added successfully');
    }
}

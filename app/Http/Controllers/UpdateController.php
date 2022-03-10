<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\House;
use App\Models\Housepic;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    //
    public function index($id){
        $house = House::find($id);
        $customer = Customer::find($house->owner_id);
        $housepic = Housepic::where('house_id',$id)->get();
        $data = House::find($id);
        return view('renter.editHouse', compact('data', 'id', 'customer', 'housepic'));

    }
    public function update(Request $request, $id){
        $images = $request->file('updateimages');
        $images->getClientOriginalExtension();
        foreach($images as $img){
        }
    }
}

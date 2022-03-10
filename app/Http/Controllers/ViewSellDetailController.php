<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\House;
use App\Models\Housepic;
use Illuminate\Http\Request;

class ViewSellDetailController extends Controller
{
    //
    public function index($id)
    {
        $house = House::find($id);
        $customer = Customer::find($house->owner_id);
        $housepic = Housepic::where('house_id', $id)->get();

        return view('sell.viewHouseDetail', compact('customer', 'house', 'housepic'));
    }
    public function index2($id)
    {
        $house = House::onlyTrashed()->find($id);
        $customer = Customer::find($house->owner_id);
        $housepic = Housepic::where('house_id',$id)->get();

        return view('renter.viewHouseDetail', compact('customer', 'house', 'housepic'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\House;
use Illuminate\Http\Request;

class ViewSeller extends Controller
{
    //
    public function index(){
        $houses=House::where('for','sell')->join('customers','customers.id','=','houses.owner_id')->get(['customers.name','customers.email','customers.phone_number','houses.location','houses.price','houses.id']);
        $deletedhouses=House::onlyTrashed()->where('for','sell')->join('customers','customers.id','=','houses.owner_id')->get(['customers.name','customers.email','customers.phone_number','houses.location','houses.price','houses.id']);
        return view('sell.viewSeller',compact('houses','deletedhouses'));
    }

}

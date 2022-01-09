<?php

namespace App\Http\Controllers;

use App\Models\House;
use Illuminate\Http\Request;

class ViewRenter extends Controller
{
    //
    public function index(){
        $houses=House::where('for','rental')->join('customers','customers.id','=','houses.owner_id')->get(['customers.name','customers.email','customers.phone_number','houses.location','houses.price','houses.id']);
        $deletedhouses=House::onlyTrashed()->where('for','rental')->join('customers','customers.id','=','houses.owner_id')->get(['customers.name','customers.email','customers.phone_number','houses.location','houses.price','houses.id']);
        return view('renter.viewRenter',compact('houses','deletedhouses'));
    }
}

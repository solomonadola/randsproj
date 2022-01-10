<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\Holiday;
use DB;

class AddRentalHouse extends Controller
{
    public function index(){
        return view('renter.addrentalhouse');
    }
}

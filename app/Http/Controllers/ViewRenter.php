<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewRenter extends Controller
{
    //
    public function index(){
        return view('renter.viewRenter');
    }
}

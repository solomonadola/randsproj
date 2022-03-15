<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\House;
use App\Models\Housepic;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // main dashboard
    public function index()
    {
        $housCount = House::count();
        $custCount = Customer::count();
        $housForSell = House::where('for', 'sell')->count();
        $housForSel = House::where('for', 'sell')->take(5)->get()->sortByDesc('id');
        $housForRenl = House::where('for', 'rental')->take(5)->get()->sortByDesc('id');
        $housForRental = House::where('for', 'rental')->count();
        $housSold = House::where('status', 'sold')->count();
        $housRented = House::where('status', 'rented')->count();
        $latestSell = House::where('for', 'sell')->latest()->take(5)->get();
        $latestRental = House::where('for', 'rental')->latest()->take(5)->get();
        return view('dashboard.dashboard', compact('housForSel','housForRenl','housCount', 'custCount', 'housForSell', 'housForRental', 'housSold', 'housRented', 'latestSell', 'latestRental'));
    }
    // employee dashboard
    public function emDashboard()
    {
        $dt        = Carbon::now();
        $todayDate = $dt->toDayDateTimeString();
        return view('dashboard.emdashboard', compact('todayDate'));
    }

    public function rands()
    {
        $data = House::where('for', 'rental')->orWhere('for', 'sell')->join('housespic', 'housespic.house_id', '=', 'houses.id')->get(['housespic.id', 'housespic.image', 'housespic.house_id', 'houses.location', 'houses.title', 'houses.description', 'houses.price', 'houses.id'])->take(10)->sortByDesc('houses.price');
        $ldata = House::where('for', 'rental')->orWhere('for', 'sell')->join('housespic', 'housespic.house_id', '=', 'houses.id')->get(['housespic.id', 'housespic.image', 'housespic.house_id', 'houses.location', 'houses.title', 'houses.description', 'houses.price', 'houses.id'])->take(15)->sortByDesc('id');
        $fid = House::where('for', 'rental')->join('housespic', 'housespic.house_id', '=', 'houses.id')->get(['housespic.id', 'housespic.image', 'houses.location', 'houses.title', 'houses.description', 'houses.price', 'houses.id'])->first();


        return view('index', compact('data', 'fid', 'ldata'));
    }
    public function randsproduct()
    {
        $data = House::where('for', 'rental')->orWhere('for', 'sell')->join('housespic', 'housespic.house_id', '=', 'houses.id')->get(['housespic.id', 'housespic.image', 'housespic.house_id', 'houses.location', 'houses.title', 'houses.description', 'houses.price', 'houses.id'])->sortByDesc('id');
        $fid = House::where('for', 'rental')->orWhere('for', 'sell')->join('housespic', 'housespic.house_id', '=', 'houses.id')->get(['housespic.id', 'housespic.image', 'housespic.house_id', 'houses.location', 'houses.title', 'houses.description', 'houses.price', 'houses.id'])->sortByDesc('id')->first();

        return view('products', compact('data', 'fid'));
    }
    public function randsdetail($id)
    {
        $data = House::where('houses.id', $id)->get()->first();
        $data2 = House::where('houses.id', $id)->get()->first();
        $images = Housepic::where('house_id', $id)->get();
        $ldata = House::where('for', $data2->for)->join('housespic', 'housespic.house_id', '=', 'houses.id')->get(['housespic.id', 'housespic.image', 'housespic.house_id', 'houses.location', 'houses.title', 'houses.description', 'houses.price', 'houses.id'])->take(15)->sortByDesc('id');
        $fid = House::where('for', $data2->for)->orWhere('for', 'sell')->join('housespic', 'housespic.house_id', '=', 'houses.id')->get(['housespic.id', 'housespic.image', 'housespic.house_id', 'houses.location', 'houses.title', 'houses.description', 'houses.price', 'houses.id'])->sortByDesc('id')->first();
        $customer=Customer::where('id',$data2->owner_id)->get()->first();
        return view('product_details', compact('customer','data', 'images', 'ldata','fid'));
    }
}

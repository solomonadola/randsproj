<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\House;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Barryvdh\DomPDF\PDF;
use Ramsey\Uuid\Type\Integer;

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
        $housCount=House::count();
        $custCount=Customer::count();
        $housForSell=House::where('for','sell')->count();
        $housForRental=House::where('for','rental')->count();
        $housSold=House::where('status','sold')->count();
        $housRented=House::where('status','rented')->count();
        $latestSell=House::where('for','sell')->latest()->take(5)->get();
        $latestRental=House::where('for','rental')->latest()->take(5)->get();
        return view('dashboard.dashboard',compact('housCount','custCount','housForSell','housForRental','housSold','housRented','latestSell','latestRental'));
    }
    // employee dashboard
    public function emDashboard()
    {
        $dt        = Carbon::now();
        $todayDate = $dt->toDayDateTimeString();
        return view('dashboard.emdashboard',compact('todayDate'));
    }

    // public function generatePDF(Request $request)
    // {
    //     // $data = ['title' => 'Welcome to ItSolutionStuff.com'];
    //     // $pdf = PDF::loadView('payroll.salaryview', $data);
    //     // return $pdf->download('text.pdf');
    //     // selecting PDF view
    //     $pdf = PDF::loadView('payroll.salaryview');
    //     // download pdf file
    //     return $pdf->download('pdfview.pdf');
    // }
}

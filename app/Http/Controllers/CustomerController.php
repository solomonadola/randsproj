<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class CustomerController extends Controller
{
    //
    public function index()
    {
        $name = '';
        $phone = '';
        return view('customers.addCustomer', compact('name', 'phone'));
    }
    public function addCustomer(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:25',
            'email' => 'required|email|unique:customers,email',
            'phone' => 'required|max:15',
        ]);



        Customer::insert([
            'name' => $request->name,
            'email' => $request->email,
            'phone_number' => $request->phone,
            'image' => '',
            'password' => ''

        ]);

        return redirect()->back()->with('success', 'new customer was added successfully');
    }
    public function viewCustomer()
    {
        $customers = Customer::all();
        return view('customers.viewCustomers', compact('customers'));
    }
}

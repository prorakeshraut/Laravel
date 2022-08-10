<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;



class CustomerController extends Controller
{
    public function index()
    {
        return view('customer');
    }
    
    public function store(Request $request)
    {
        echo "<pre>";
        print_r($request->all());

       $customer = new Customer;
       $customer->name = $request['name'];
       $customer->email = $request['email'];
       $customer->gender = $request['gender'];
       $customer->address = $request['address'];
       $customer->state = $request['state'];
       $customer->country = $request['country'];
       $customer->dob = ($request['dob']);
       $customer->password = md5($request['password']);
       $customer->confirm_password = md5($request['confirm_password']);
       $customer->save();

       return redirect('/customer/view');

    }

    public function view()
    {
        $customers = Customer::all();
        $data = compact('customers');
        return view('customer-view')->with($data);
    }
}

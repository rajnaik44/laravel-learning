<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customers;

class CustomerController extends Controller
{
    public function create(){
        return view("customer");
    }

    public function store(Request $request){

        echo "<pre>";
        print_r($request->all());


        //insert query in database
        $cuustomer = new Customers();

        $cuustomer->name = $request['name'];
        $cuustomer->email = $request['email'];
        $cuustomer->password = md5($request['password']);
        $cuustomer->country = $request['country'];
        $cuustomer->state = $request['state'];
        $cuustomer->address = $request['address'];
        $cuustomer->gender = $request['gender'];
        $cuustomer->dob = $request['dob'];
        $cuustomer->save();

        return redirect('/customer/view');


        //validation
        
        // $request->validate([
        //     'name' => 'required',
        //     'email' => 'required|email',
        //     'password' => 'required',
        //     'country'=>'required',
        //     'gender'=>'required',
        //     'dob'=>'required',
        //     'address'=>'required',
        // ]);
     
    }

    public function view(){
        $customer = Customers::all();
        $data = compact('customer');
        return view('customer-view')->with($data);
    }




}

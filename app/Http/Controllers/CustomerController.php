<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customers;

class CustomerController extends Controller
{
    public function create(){
        $url = url('/customer');
        $title = 'Customer Registration';
        $data = compact("url", "title");
        return view("customer")->with($data);
    }

    public function store(Request $request){

        // echo "<pre>";
        // print_r($request->all());

        // p($request->all());
        // die;
        //insert query in database
        $customer = new Customers();

        $customer->name = $request['name'];
        $customer->email = $request['email'];
        $customer->password = md5($request['password']);
        $customer->country = $request['country'];
        $customer->state = $request['state'];
        $customer->address = $request['address'];
        $customer->gender = $request['gender'];
        $customer->dob = $request['dob'];
        $customer->save();

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
    
    public function trash(){
        $customer = Customers::onlyTrashed()->get();
        $data = compact('customer');
        return view('customer-trash')->with($data);
    }

    public function delete($id){
    $customer = Customers::find($id);
    if(!is_null($customer)){
        $customer->delete();
    }

    return redirect()->back();

    }
    public function restore($id){
    $customer = Customers::withTrashed()->find($id);
    if(!is_null($customer)){
        $customer->restore();
    }

    return redirect()->back();

    }
    public function forceDelete($id){
    $customer = Customers::withTrashed()->find($id);
    if(!is_null($customer)){
        $customer->forceDelete();
    }

    return redirect()->back();

    }

   
    public function edit($id , Request $request ){
        $customer = Customers::find($id);

        if(is_null($customer)){
            //not found
            return redirect()->back();
        }
        else
        {
            // found
            $url = url('/customer/update') . "/" . $id;
            $title = "Customer Update";
            $data = compact('customer', 'url' , 'title');
            return view ('customer')->with($data);
        }
       
    }
    public function update(Request $request, $id){
        $customer = Customers::find($id);

        $customer->name = $request['name'];
        $customer->email = $request['email'];
        $customer->password = md5($request['password']);
        $customer->country = $request['country'];
        $customer->state = $request['state'];
        $customer->address = $request['address'];
        $customer->gender = $request['gender'];
        $customer->dob = $request['dob'];
        $customer->save();

        return redirect('/customer/view');
    }





}

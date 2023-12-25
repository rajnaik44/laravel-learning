<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Models\Customers;
use App\Http\Controllers\CustomerController;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get("/", function(){
    return view("home");
});

Route::get("/register", [RegistrationController::class,"index"]);
Route::Post("/register", [RegistrationController::class,"register"]);


Route::get("/customers", function(){
    $customers = Customers::all();

    // echo "<pre>";
    print_r($customers->toArray ());

});


Route::get("/customer/create", [CustomerController::class,"create"])->name("customer.create");
Route::get("/customer/view", [CustomerController::class,"view"]);
Route::get("/customer/delete/{id}", [CustomerController::class,"delete"])->name("customer.delete");
Route::get("/customer/edit/{id}", [CustomerController::class,"edit"])->name("customer.edit");
Route::post("/customer/update/{id}", [CustomerController::class,"update"])->name("customer.update");
Route::Post("/customer", [CustomerController::class,"store"]);


route::get("get-all-session", function(){
    $session = session()->all();
    p($session);

});

route::get('set-session', function(Request $request){
    $request->session()->put('name', 'Wscube Tech');                    
    $request->session()->put('user_id', '123');    
    // $request->session()->flash('status', 'success');   
    return redirect('get-all-session');             
});

route::get('destroy-session', function(){
    session()->forget('name');
    session()->forget('user_id');
    return redirect('get-all-session');


});


<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Models\Customers;
use App\Http\Controllers\CustomerController;

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

    echo "<pre>";
    print_r($customers->toArray ());

});


Route::get("/customer/create", [CustomerController::class,"create"])->name("customer.create");
Route::get("/customer/view", [CustomerController::class,"view"]);
Route::Post("/customer", [CustomerController::class,"store"]);

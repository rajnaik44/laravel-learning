<?php

use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Models\Customers;
use App\Http\Controllers\CustomerController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;


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
Route::get('/data', [IndexController::class,'index']);
Route::get('/group', [IndexController::class,'group']);

Route::get('/{lang?}', function ($lang = null) {
    App::setLocale($lang);
    return view('home');
});

Route::get('/register', [RegistrationController::class, 'index']);
Route::Post('/register', [RegistrationController::class, 'register']);

//route grouping customer

Route::group(['prefix' => '/customer'], function () {
    // Route::get("/customer", function(){
    Route::get('', function () {
        $customers = Customers::all();
        // echo "<pre>";
        print_r($customers->toArray());
    });

    Route::get('/create', [CustomerController::class, 'create'])->name('customer.create');
    Route::get('/view', [CustomerController::class, 'view']);
    Route::get('/delete/{id}', [CustomerController::class, 'delete'])->name('customer.delete');
    Route::get('/force-delete/{id}', [CustomerController::class, 'forceDelete'])->name('customer.force-delete');
    Route::get('/restore/{id}', [CustomerController::class, 'restore'])->name('customer.restore');
    Route::get('/edit/{id}', [CustomerController::class, 'edit'])->name('customer.edit');
    Route::post('/update/{id}', [CustomerController::class, 'update'])->name('customer.update');
    Route::Post('', [CustomerController::class, 'store']);

    Route::get('/customer/trash', [CustomerController::class, 'trash'])->name('customer.trash');
});

route::get('get-all-session', function () {
    $session = session()->all();
    p($session);
});

route::get('set-session', function (Request $request) {
    $request->session()->put('name', 'Wscube Tech');
    $request->session()->put('user_id', '123');
    // $request->session()->flash('status', 'success');
    return redirect('get-all-session');
});


route::get('destroy-session', function () {
    session()->forget('name');
    session()->forget('user_id');
    return redirect('get-all-session');
});


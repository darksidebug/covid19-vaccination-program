<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', function (Request $request ) {


    if(!session('status')){
        return redirect('/scan');
    }
        return view('pages.registration',
        ['qr_code' => session('qrcode'),
        'firstname' => session('firstname'),
        'middlename' => session('middlename'),
        'lastname' => session('lastname'),
        'contact' => session('contact')
        ]);

});

Route::post('/postdata', function(Request $request){
    // return response()->json(['status' => $request->get('qr_code')]);
    redirect('/')
    ->with('status','Verified')
    ->with('qrcode', $request->get('qr_code'))
    ->with('firstname', $request->get('first_name'))
    ->with('middlename', $request->get('middle_name'))
    ->with('lastname', $request->get('last_name'))
    ->with('contact', $request->get('contact_number'))
    ;
    // redirect('/')->with('status','verified');

});


Route::get('/scan', function(){
    return view('layout.scanner');
});

<?php

use App\Http\Controllers\UserController;
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

Route::get('/register', function (Request $request ) {


    if(!session('status')){
        return redirect('/scan');
    }
        return view('pages.registration',
        ['qr_code' => session('qr_code'),
        'first_name' => session('first_name'),
        'middle_name' => session('middle_name'),
        'last_name' => session('last_name'),
        'contact' => session('contact'),
        'province' => session('province'),
        'municipality' => session('municipality'),
        'barangay' => session('barangay')
        ]);

});

Route::post('/postdata', function(Request $request){
    // return response()->json(['status' => $request->get('qr_code')]);
    redirect('/')
    ->with('status','Verified')
    ->with('qr_code', $request->get('qr_code'))
    ->with('first_name', $request->get('first_name'))
    ->with('middle_name', $request->get('middle_name'))
    ->with('last_name', $request->get('last_name'))
    ->with('contact', $request->get('contact_number'))
    ->with('province', $request->get('province'))
    ->with('municipality', $request->get('municipality'))
    ->with('barangay', $request->get('barangay'))
    ;
    // redirect('/')->with('status','verified');

});


Route::get('/scan', function(){
    return view('pages.scanner');
});


Route::group(['middleware' => 'auth'], function(){
    Route::get('/', [UserController::class, 'returnDashboard'])->name('dashboard');
    Route::get('/logout', [UserController::class, 'logout'])->name('logout.user');

    Route::post('/register-user', [UserController::class, 'registerUser']);
});

Route::get('/login', [UserController::class, 'index'])->name('login');
Route::post('/login', [UserController::class, 'loginUser'])->name('check.user');



<?php

use App\Http\Controllers\CounselingController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ScreeningController;
use App\Http\Controllers\VaccineController;
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

Route::get('/register',[RegisterController::class,'index']);

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
<<<<<<< HEAD
    Route::get('/counseling',[CounselingController::class,'index'])->name('counseling');
=======
    Route::get('/vaccine', [VaccineController::class, 'index']);
>>>>>>> 426cd263c1b8af720765be1045ffa80c59d272f9
});

Route::get('/login', [UserController::class, 'index'])->name('login');
Route::post('/login', [UserController::class, 'loginUser'])->name('check.user');

Route::get('/screening',[ScreeningController::class, 'index'])->name('screening');

<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeopleRegistration;
use App\Http\Controllers\QrController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VaccinatedController;
use App\Http\Controllers\RecordsController;
use App\Http\Controllers\VaccineController;
use App\Models\Vaccine;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/register-person', [PeopleRegistration::class, 'register']);

Route::post('/qrcode', [QrController::class, 'getdata']);

Route::post('/register-user', [UserController::class, 'registerUser']);

Route::post('/update-password', [UserController::class, 'updatePassword']);

Route::post('/start-vaccination', [VaccinatedController::class, 'store']);

Route::post('/vaccination-records', [RecordsController::class, 'getrecords']);

Route::post('/vaccine', [VaccineController::class, 'create']);


<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Vaccine;


class VaccineController extends Controller
{
    public function create(Request $request)
    {
        $validation = Validator::make($request->all(),
        [
            'batch_number' => 'required',
            'lot_number' => 'required',
            'vaccine_manufacturer' => 'required'
        ]);

        if($validation->fails())
        {
            return response()->json(['status' => 'error' , 'errors' => $validation->errors()]);
        }

        Vaccine::create($request->all());

        return response()->json(['status' => 'success']);
    }

    public function index()
    {
        return view('pages.vaccine');
    }
}

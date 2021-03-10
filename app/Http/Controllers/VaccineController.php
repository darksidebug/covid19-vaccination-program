<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
            return response()->json(['status' => 'error' , 'errors' => $validation->array()]);
        }

        return response()->json(['status' => 'success']);
    }
}

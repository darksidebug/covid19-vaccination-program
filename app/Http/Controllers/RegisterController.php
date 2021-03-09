<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{



    public function index()
    {
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

    }
}

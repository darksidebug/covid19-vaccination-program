<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;
use App\Models\Vaccine;

class VaccinatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $person = Person::all();
        return view('pages.vaccinator')->with(['person' => $person]);
    }

   public function withId($id)
   {
        $person =  Person::findOrFail($id);
        $vaccine = Vaccine::all();

        return view('pages.vaccinator_vaccine')->with(['person' => $person, 'vaccine' => $vaccine]);
   }


   public function store(Request $request)
   {

   }

}

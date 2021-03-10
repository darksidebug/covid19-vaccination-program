<?php

namespace App\Http\Controllers;
use App\Models\Person;

use Illuminate\Http\Request;

class PersonsForScreening extends Controller
{
    public function index()
    {

        $individuals = Person::councelled_location;

        return view('pages.persons-lists-table-for-screening', ['lists' => $individuals]);
    }

    public function filter(Request $request)
    {
        $person = Person::where('last_name', $request->search)
                        ->where('first_name', $request->search);

        foreach($person as $info)
        {
            if($info)
            {}
        }

        return view('pages.persons-lists-table-for-screening', ['lists' => $individuals]);
    }
}

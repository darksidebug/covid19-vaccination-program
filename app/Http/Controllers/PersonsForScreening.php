<?php

namespace App\Http\Controllers;
use App\Models\Person;
use App\Models\Status;

use Illuminate\Http\Request;

class PersonsForScreening extends Controller
{
    public function index()
    {
        $individuals = [];
        $status = Status::where('status', '2-1')
                            ->orWhere('status', '2-2')
                            ->get();

        foreach($status as $stats)
        {
            if($stats->person->counselled_location->municipality === Auth::user()->municipality && 
            $stats->person->counselled_location->facility === Auth::user()->name_of_facility)
            {
                $individuals = $stats->person;
            }
        }

        return view('pages.persons-lists-table-for-screening', ['lists' => $individuals]);
    }

    public function filter(Request $request)
    {
        $individuals = [];
        $status = Status::where('status', '2-1')
                            ->orWhere('status', '2-2')
                            ->get();

        foreach($status as $stats)
        {
            if($stats->person->counselled_location->municipality === Auth::user()->municipality && 
            $stats->person->counselled_location->facility === Auth::user()->name_of_facility)
            {
                if($stats->person->counselled_location->last_name === $request->search)
                {
                    $individuals = $stats->person;
                }
            }
        }

        return view('pages.persons-lists-table-for-screening', ['lists' => $individuals]);
    }
}

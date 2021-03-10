@extends('layout.main_layout')

@section('content')
    <div class="container">
        <div class="card roundeds shadow">
            <center>
                <h5>Vaccination Table</h5>
            </center>

            <div class="table-responsive">
                <table class="table table-hover table-bordered">
                    <thead class="text-secondary">
                    <tr>
                        <th class="pt-1 pb-1 border-bottom-0">QR Code</th>
                        <th class="pt-1 pb-1 border-bottom-0">Full Name</th>
                        <th class="pt-1 pb-1 border-bottom-0">Action</th>
                    </tr>
                    </thead>
                    <tbody>

                        @foreach ($person as $person_item)
                        <tr>
                            <td>{{$person_item->qr_code}}</td>
                            <td>{{ $person_item->last_name }}, {{$person_item->first_name}}</td>
                            <td class="pt-2 pb-1"><a href="/vaccinator/{{$person_item->id}}" class="btn btn-xs btn-primary">Start Vaccination</a></td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

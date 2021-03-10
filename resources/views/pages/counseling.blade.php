@extends('layout.main_layout')

@section('content')
<div class="container">
    <div class="card p-0 shadow rounded-lg">
        <div class="card-header">
         <h3>Counseling </h3>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">QR Code</th>
                    <th scope="col">Fullname</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>

                @foreach($for_counseling  as $person)
                  <tr>
                    <th scope="row">{{$person->qr_code}}</th>
                    <td>{{$person->fullname()}}</td>
                    <td><a href="{{route('counseling.sheet',['id'=>$person->id])}}" class="btn btn-primary btn-xs">Start Counseling</a></td>
        
                  </tr>
                @endforeach
                </tbody>
              </table>
        </div>

      </div>



</div>


@endsection


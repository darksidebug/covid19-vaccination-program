@extends('layout.main_layout')

@section('content')

<div class="container">

    <div class="row justify-content-center">
        <div class="col-12 col-lg-6 col-xl-5">
            <div class="card p-0 shadow-sm rounded-lg text-center">
            
                <div class="card-body">
                   <h4>Thank you!</h4>
                    <a href="{{route('counseling')}}">Back to dashboard</a>
                </div>
            </div>
        </div>
    </div>


</div>

@endsection
@extends('layout.main_layout')

@section('content')
<div class="container">

    <div class="row justify-content-center">
        <div class="col-12 col-lg-6 col-xl-5">
            <div class="card p-0 shadow-sm rounded-lg">
                <div class="card-header p-4">
                <h3>Counseling Form</h3> 
                </div>
                <div class="card-body">
                <form action="{{route('counseling.sheet')}}" method="post">
                    @csrf

                    <input type="text" name="person_id" id="" value={{$person_id}} hidden>
                    <input type="number" name="dose" id="" value={{$dose}} hidden>
                    <div class="d-flex justify-content-start">
                        <input type="checkbox" class="checkbox" name="consent">
                        <p class="ml-3 mt-2 pt-1">Consent</p>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Reason for Refusal </label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="reason"></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Done Counseling</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>


</div>


@endsection
@extends('layout.main_layout')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-6">
                <div class=" card roundeds shadow">



                    <center><h6>Select Vaccine</h6></center>
                        <form action="/vaccinator" method="post">
                            @csrf
                            <input type="hidden" name="person_id" value="{{ $person->id }}">
                            <div class="form-group">
                                <label for="batch_number">Batch Number</label>
                                <select class="form-control" name="batch_number" id="batch_number">
                                    @foreach ($vaccine as $vaccine_item)
                                    <option value="{{$vaccine_item->batch_number}}">{{ $vaccine_item->batch_number }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="lot_number">Lot Number</label>
                                <select class="form-control"  name="lot_number" id="lot_number">
                                    @foreach ($vaccine as $vaccine_item)
                                    <option value="{{$vaccine_item->lot_number}}">{{ $vaccine_item->lot_number }}</option>
                                    @endforeach
                                </select>
                            </div>


                            <div class="form-group">
                                <label for="vaccine_manufacturer">Vaccine Manufacturer</label>
                                <select class="form-control"  name="vaccine_manufacturer" id="vaccine_manufacturer">
                                    @foreach ($vaccine as $vaccine_item)
                                    <option value="{{$vaccine_item->vaccine_manufacturer}}">{{ $vaccine_item->vaccine_manufacturer }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <button class="btn btn-primary " type="submit">Done Vaccination</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

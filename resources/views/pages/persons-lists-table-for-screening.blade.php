@extends('layout.main_layout')

@section('content')
<div class="container mt-5 logo-wrapper">
    <div class="row">
        <div class="col-2 col-md-1 sl-log">
            <img src="https://trace.southernleyte.org.ph/assets/img/SouthernLeyteLogo.png" width="70" height="70" class="" alt="" srcset="">
        </div>

        <div class="col p-lg-0 sl-txt">
            <h4 class="text-heading pl-2 pr-2 ml-3"> <strong> COVID-19 VACCINATION PROGRAM </strong></h4>
        </div>
    </div>
</div>
<div class="container mt-4">
    <div class="row">
        <div class="col-md-12">
            <h4 class="text-center text-secondary">Lists of Individuals for Screening</h4>
        </div>
        <div class="col-md-12">
            
            <form action="{{ route('persons_lists') }}" method="post" class="mt-5">
                @csrf
                <div class="row">
                    <div class="col-md-5 d-flex justify-content-center">
                        <input type="search" class="form-control" placeholder="Filter by last name or first name..." name="search">
                        <button type="submit" class="btn btn-primary ml-1 pt-2" style="height: 44px; margin-top: 0px;">Search</button>
                    </div>
                </div>
            </form>
            <div class="table-responsive mt-2 bg-white pt-4 pl-4 pr-4 pb-2 border border-gray" style="border-radius: 5px;">
                <table class="table table-hover table-bordered bg-white mt-1">
                    <thead>
                        <tr>
                            <td class="text-secondary border-bottom-0">QR Code</td>
                            <td class="text-secondary border-bottom-0">Full Name</td>
                            <td class="text-secondary border-bottom-0">Actions</td>
                        </tr>
                    </thead>
                    <tbody class="border-top-1">
                        @if(count($lists) > 0)
                        @foreach($lists as $individuals)
                        <tr>
                            <td class="text-secondary">$individuals->qr_code</td>
                            <td class="text-secondary">$individuals->last_name.' '.$individuals->suffix_name.'.,'.$individuals->first_name.' '.$individuals->middle_name</td>
                            <td class="text-secondary pt-2 pb-1">
                                <a href="{{ route('screening', ['id' => $individuals->id, 'qr' => $individuals->qr_code]) }}" class="btn btn-primary btn-xs pt-1">Start Screening</a>
                            </td>
                        </tr>
                        @endforeach
                        @else
                        <tr>
                            <td class="text-secondary text-center" colspan="3">No records to show</td>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
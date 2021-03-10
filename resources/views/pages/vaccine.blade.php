@extends('layout.main_layout')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-4 mt-3">
                <div class="row card roundeds shadow">
                    <h5 class="text-center mb-4 mt-3"><strong>Add New Vaccine</strong></h2>
                        <form action="/api/vaccine" method="post" id="add_vaccine_form">
                            @csrf
                            <div id="alert-box-vaccine" style="display:none; margin-bottom: 2rem !important" class="mt-2 container alert alert-danger" role="alert">
                            </div>

                            <div class="form-group mt-3">
                                <label for="batch_number">Batch Number</label>
                                <input type="text" class="form-control " style="position: relative; top:-0.6rem" name="batch_number" id="batch_number">
                            </div>
                            <div class="form-group" style="position: relative; top:-0.6rem" >
                                <label for="lot_number">Lot Number</label>
                                    <input type="text" class="form-control" style="position: relative; top:-0.6rem"  name="lot_number" id="lot_number">
                            </div>

                            <div class="form-group" style="position: relative; top:-1.2rem" >
                                <label for="vaccine_manufacturer">Vaccine Manufacturer Name</label>
                                <input type="text" class="form-control" style="position: relative; top:-0.6rem"  name="vaccine_manufacturer" id="vaccine_manufacturer">
                            </div>


                            <div class="form-group pt-2">
                                <center>
                                    <button type="submit" id="registerbtn" class="btn btn-primary ">Add New Vaccine</button>
                                    <a class="btn btn-secondary" href="/">Cancel/Back</a>
                                </center>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>

<script defer>
    document.getElementById('add_vaccine_form').addEventListener('submit', add_new_vaccine_to_database);

    async function add_new_vaccine_to_database(e){
        e.preventDefault();

        let formdata = new FormData(this);

        let data = CreateObject(formdata);
        let init = {
            method: 'post',
            headers: {
                'Accept' : 'application/json',
                'Content-Type' : 'application/json'
            },
            body : JSON.stringify(data)
        }
        let url= '/api/vaccine';
        let response = await fetch(url, init);

        response = await response.json();

        check_response_value(response);
    }



    function check_response_value(response)
    {
        if(response.status === "success"){
            Swal.fire({
                'icon': 'success',
                'text': 'New Vaccine Added'
            }).then((resp)=>{
                if(resp.isConfirmed){
                    let alert_box = document.getElementById('alert-box-vaccine');
                    alert_box.style.display = "none";
                    document.getElementById('add_vaccine_form').reset();
                }
            })
        }else{
            Swal.fire({
                'icon': 'error',
                'text': 'An error occured while trying to save the vaccine data'
            }).then((resp)=>{
                if(resp.isConfirmed){
                    let alert_box = document.getElementById('alert-box-vaccine');
                    let alert_data = "";
                    alert_box.style.display = "block";

                    if(typeof response.errors === 'object'){
                        for(let x in response.errors){
                            alert_data += `<li> ${response.errors[x]} </li>`;
                        }
                    }
                    else{
                        alert_data = `<li> ${response.errors} </li>`;
                    }

                    document.body.scrollTop = 0; // For Safari
                    document.documentElement.scrollTop = 0;

                    alert_box.innerHTML = alert_data;
                }
            })
        }
    }

    async function  CreateObject(formdata){
        let data = {};
        for (var pair of formdata.entries()) {
            data[pair[0]] = pair[1];

        }

        return  await data;
    }
</script>

@endsection

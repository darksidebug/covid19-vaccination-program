import { CreateObject } from "./FormData_Converter.js";

// Create User Function
export async function CreateUser(e){
    e.preventDefault();

    let button = document.getElementById('registerbtn');
    button.disabled = true;
    button.innerHTML = "<span id='spinnerID' class='spinner-border' height='0.3rem'></span> Loading";

    let formdata = new FormData(this);

    // for(var pair of formdata.entries()) {
    //     console.log(pair[0]+ ', '+ pair[1]);
    //  }
    // // console.log(formdata.values())

    let data = await CreateObject(formdata)

    let url = '/api/register-user';

    let response = await fetch(url, {
        method: 'post',
        headers: {
            'Accept' : 'application/json',
            'Content-Type' : 'application/json'
        },
        body : JSON.stringify(data)
    })


    response = await response.json();

    // console.log(response);

    if(response.status === "success"){
        Swal.fire({
            icon : 'success',
            text : 'New User Created'
        }).then((resp) => {
            if(resp.isConfirmed){
                alert_box.style.display = "none";
                // this.reset();
                document.getElementById('adduserform').reset();
            }
        })


    }else{
        Swal.fire({
            icon : 'error',
            text : 'An error occured  while trying to saving the registration'
        }).then((resp) => {
            if(resp.isConfirmed){
                let alert_box = document.getElementById('alert-box');
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

    button.disabled = false;
    button.innerText = "register";
}

// Update Password Function
export async function UpdatePass(e){
    e.preventDefault();

    let button = document.getElementById('updatebtn');
    button.disabled = true;
    button.innerHTML = "<span id='spinnerID' class='spinner-border' height='0.3rem'></span> Loading";
    let alert_box = document.getElementById('update-alert-box');

    let formdata = new FormData(this);

    let data = await CreateObject(formdata)

    let url = '/api/update-password';

    let response = await fetch(url, {
        method: 'post',
        headers: {
            'Accept' : 'application/json',
            'Content-Type' : 'application/json'
        },
        body : JSON.stringify(data)
    })


    response = await response.json();

    // console.log(response);

    if(response.status === "success"){
        Swal.fire({
            icon : 'success',
            text : 'Password Successfully Change'
        }).then((resp) => {
            if(resp.isConfirmed){
                alert_box.style.display = 'none';
                // this.reset();
                document.getElementById('updatepassform').reset();
            }
        })


    }else{
        Swal.fire({
            icon : 'error',
            text : 'An error occured  while trying to updating the password'
        }).then((resp) => {
            if(resp.isConfirmed){
                let alert_box = document.getElementById('update-alert-box');
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
                // for(let x in response.errors){

                // }

                document.body.scrollTop = 0; // For Safari
                document.documentElement.scrollTop = 0;

                alert_box.innerHTML = alert_data;
            }
        })
    }

    button.disabled = false;
    button.innerText = "register";
}


export async function StartVaccination(e){
    e.preventDefault();

    let button = document.getElementById('vaccination-btn');
    button.disabled = true;
    button.innerHTML = "<span id='spinnerID' class='spinner-border' height='0.3rem'></span> Loading";
    let alert_box = document.getElementById('scan-alert-box');
    let formdata = new FormData(this);
    let data = await CreateObject(formdata)
    let url = '/api/start-vaccination'
    let response = await fetch(url, {
        method: 'post',
        headers: {
            'Accept' : 'application/json',
            'Content-Type' : 'application/json'
        },
        body : JSON.stringify(data)
    })
    response = await response.json();
    console.log(response);

    if(response.status === "success"){
        Swal.fire({
            icon : 'success',
            text : 'Start Vaccination!'
        }).then((resp) => {
            if(resp.isConfirmed){
                alert_box.style.display = 'none';
                // this.reset();
                document.getElementById('start-vaccination-form').reset();
            }
        })


    }else{
        Swal.fire({
            icon : 'error',
            text : 'An error occured '
        }).then((resp) => {
            if(resp.isConfirmed){
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

    button.disabled = false;
    button.innerText = "Start Vaccination";
}



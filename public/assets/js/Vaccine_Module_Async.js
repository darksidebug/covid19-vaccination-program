import { CreateObject } from "./FormData_Converter";


export async function add_new_vaccine_to_database(e)
{
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
            'icon': 'sucesss',
            'text': 'New Vaccine Added'
        }).then((rep)=>{
            if(resp.isConfirmed){
                alert_box.style.display = "none";
                document.getElementById('add_vaccine_form').reset();
            }
        })
    }else{
        Swal.fire({
            'icon': 'error',
            'text': 'An error occured while trying to save the vaccine data'
        }).then((rep)=>{
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

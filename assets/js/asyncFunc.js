

 function CreateObject(formdata){
    let data = {};
    for (var pair of formdata.entries()) {
        data[pair[0]] = pair[1];

      }

    //   console.log(data);

      return data;
}

let myform = document.getElementById('registerForm');
myform.addEventListener('submit',SaveData);


async function SaveData(e){
    e.preventDefault();

    // for (var value of formData.values()) {
    //     console.log(value);
    //  }

    let button = document.getElementById('confirmButton');

    button.disabled = true;
    button.innerHTML = "<span id='spinnerID' class='spinner-border'></span> Confirming";



    let formData = new FormData(myform);

    let objectData = CreateObject(formData);

    // for (var pair of formData.entries()) {
    //     console.log(pair[0] + " - " + pair[1]);
    //   }

    let url = "/api/register-person";

    let response = await fetch(url, {
        method: 'post',
        headers : {
            'Accept' : 'application/json',
            'Content-Type' : 'application/json'
        },
        body : JSON.stringify(objectData)
    });

    let returnData = await response.json();

    // console.log(returnData.errors);

    if(returnData.status === "success"){
        Swal.fire({
            icon : 'success',
            text : 'Success'
        }).then((resp) => {
            if(resp.isConfirmed){
                window.location.replace('/register');
            }
        })


    }else{
        Swal.fire({
            icon : 'error',
            text : 'An occured while trying to saving the registration'
        }).then((resp) => {
            if(resp.isConfirmed){
                let alert_box = document.getElementById('alert-box');
                let alert_data = "";
                alert_box.style.display = "block";
                for(let x in returnData.errors){
                    alert_data += `<li> ${returnData.errors[x]} </li>`;
                }

                document.body.scrollTop = 0; // For Safari
                document.documentElement.scrollTop = 0;

                alert_box.innerHTML = alert_data;
            }
        })


    }

    button.disabled = false;
    button.innerText = "Confirm and Register"

    // console.log(await response.json());

}




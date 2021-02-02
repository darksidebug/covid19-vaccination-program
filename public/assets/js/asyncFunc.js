

let myform = document.getElementById('registerForm');
myform.addEventListener('submit',SaveData);


async function SaveData(e){
    e.preventDefault();

    // for (var value of formData.values()) {
    //     console.log(value);
    //  }



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
        });

        window.location.replace('/');
    }else{
        Swal.fire({
            icon : 'error',
            text : 'An occured while trying to saving the registration'
        })

        let alert_box = document.getElementById('alert-box');
        let alert_data = "";
        for(let x in returnData.errors){
            alert_data += `<li> ${returnData.errors[x]} </li>`;
        }

        alert_box.innerHTML = alert_data;
    }

    // console.log(await response.json());

}


function CreateObject(formdata){
    let data = {};
    for (var pair of formdata.entries()) {
        data[pair[0]] = pair[1];

      }

    //   console.log(data);

      return data;
}

async function submitForm(event){
    event.preventDefault();

    let response = await fetch('http://localhost:8080/actsfootprints/assets/php/qrscanner.php',{
                method : 'post',
                body : new FormData(qrForm)
            });

    let result = await response.json();
    if(result.status === 'success'){
        Swal.fire({
            icon: 'success',
            title: 'Redirecting..',
            timer: 2000,
            timerProgressBar : true,
        }).then((resp) =>{
            if (resp.dismiss === Swal.DismissReason.timer || resp.isConfirmed) {
                let _tokens = document.getElementsByName('_token')[0].value;
                let objAddress = checkAddress(result.data[0].address);
                // console.log(objAddress);
                let formData = {_token : _tokens, qr_code : result.data[0].qr_code, first_name : result.data[0].first_name, middle_name : result.data[0].middle_name, last_name : result.data[0].last_name, contact_number : result.data[0].contact_number};
                SendPost(formData);
              }
        })
    }else if(result.status === 'invalid'){
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: "Qr Code not registered"
        }).then((resp)=>{
            if(resp.isConfirmed){
                window.location.replace('http://trace.southernleyte.org.ph/signup');
            }
        });
    }

}

function checkAddress(address){
    let objectData = {province: "", municipality: "", barangay: ""};
    let newAddress = address.toLowerCase();
    for(var province in r){
        if(newAddress.match(province.toLowerCase())){
            objectData.province = province;
        }
    }

    for(let municipality in r[objectData.province]){
        if(newAddress.match(municipality.toLowerCase())){
            objectData.municipality = municipality;
        }
    }

    for(let barangay in r[objectData.province[objectData.municipality]]){
        if(newAddress.match(barangay.toLowerCase())){
            objectData.province = barangay;
        }
    }


    return objectData;
}

async function SendPost(data){
    let token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    let response = await fetch('/postdata',{
        method: 'post',
        headers : {
            "Content-Type": "application/json",
                    "Accept": "application/json, text-plain, */*",
                    "X-Requested-With": "XMLHttpRequest",
                    "X-CSRF-TOKEN": token
        },
        credentials: "same-origin",
        body : JSON.stringify(data)
    });
    // console.log(response);

    // let resp = await response.json();

    // console.log(resp);
    window.location.href = '/';
}

let qrForm = document.getElementById('qrForm');
qrForm.addEventListener('submit',submitForm);

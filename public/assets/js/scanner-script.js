async function submitForm(event){
    event.preventDefault();

    let response = await fetch('http://localhost:8080/actsfootprints/assets/php/qrscanner.php',{
                method : 'post',
                body : new FormData(qrForm)
            });

    let result = await response.json();

    // console.log(result);

    if(result.status === 'success'){
        Swal.fire({
            icon: 'success',
            title: 'Redirecting..',
            timer: 2000,
            timerProgressBar : true,
        }).then((resp) =>{
            if (resp.dismiss === Swal.DismissReason.timer) {
                window.location.replace('/');
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

let qrForm = document.getElementById('qrForm');
qrForm.addEventListener('submit',submitForm);

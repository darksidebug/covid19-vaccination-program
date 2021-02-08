@extends('layout.main_layout')


@section('scan_content')

<meta name="csrf-token" content="{{ csrf_token() }}">
<div class="container">
    <div class="text-center mt-5">
        <h2 class="text-center text-heading-scan text-heading pt-3">COVID-19 Vaccination Program</h2>

        <div class="col-md-6 offset-md-3 col-sm-8 offset-sm-2 col-xs-12 mt-5">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-center text-secondary pt-1">Good Day !</h4>
                </div>
                <div class="card-body">
                    <center>
                        <a id="btn-scan-qr" c>
                            <img src="https://uploads.sitepoint.com/wp-content/uploads/2017/07/1499401426qr_icon.svg">
                        </a>
                    </center>

                    <canvas hidden="" id="qr-canvas"></canvas>
                    <p class="text-center">Click QR image to scan</p>
                    <form action="" method="post" id="qrForm">
                        @csrf
                        <input type="text" name="qrcode" id="qrcode" placeholder="Qr Code...">
                        <center>
                            <button type="submit" id="verifyButton"
                                class="btn btn-confirm mt-2 mb-3 btn-verify spinner">
                                Verify QR Code
                            </button>
                        </center>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@include('templates.footer')
<script src="https://rawgit.com/sitepoint-editors/jsqrcode/master/src/qr_packed.js"></script>

<script>
    const qrcode1 = window.qrcode;

    const video = document.createElement("video");
    const canvasElement = document.getElementById("qr-canvas");
    const canvas = canvasElement.getContext("2d");

    const qrcodes = document.getElementById("qrcode");
    const outputData = document.getElementById("outputData");
    const btnScanQR = document.getElementById("btn-scan-qr");

    let scanning = false;

    qrcode1.callback = res => {
        if (res) {
            //outputData.innerText = res;
            // console.log(res);
            qrcodes.value = res;

            let bodyData = {
                "qrcode": res
            }

            scanning = false;

            video.srcObject.getTracks().forEach(track => {
                track.stop();
            });

            // qrResult.hidden = false;
            canvasElement.hidden = true;
            btnScanQR.hidden = false;
        }
    };

    btnScanQR.onclick = () => {
        navigator.mediaDevices
            .getUserMedia({
                video: {
                    facingMode: "environment"
                }
            })
            .then(function (stream) {
                scanning = true;
                //   qrResult.hidden = true;
                btnScanQR.hidden = true;
                canvasElement.hidden = false;
                video.setAttribute("playsinline",
                    true); // required to tell iOS safari we don't want fullscreen
                video.srcObject = stream;
                video.play();
                tick();
                scan();
            });
    };

    function tick() {
        canvasElement.height = video.videoHeight;
        canvasElement.width = video.videoWidth;
        canvas.drawImage(video, 0, 0, canvasElement.width, canvasElement.height);

        scanning && requestAnimationFrame(tick);
    }

    function scan() {
        try {
            qrcode1.decode();
        } catch (e) {
            setTimeout(scan, 300);
        }
    }

</script>
@endsection



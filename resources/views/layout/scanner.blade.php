<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ env('APP_NAME', null) }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom_style.css') }}">

    <script src="{{asset('assets/js/scanner-script.js')}}" defer></script>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.14.0/sweetalert2.min.js">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.14.0/sweetalert2.all.min.js" defer></script> -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10" defer></script>
</head>

<body>
    <style>
        html {
            height: 100%;
        }


        #qr-canvas {
            margin: auto;
            width: calc(100% - 20px);
            max-width: 400px;
        }

        #btn-scan-qr {
            cursor: pointer;
        }

        #btn-scan-qr img {
            height: 10em;
            padding: 15px;
            margin: 15px;
            background: white;
        }

        /* #qr-result {
  font-size: 1.2em;
  margin: 20px auto;
  padding: 20px;
  max-width: 700px;
  background-color: white;
} */

    </style>

    <div class="container">
        <div class="text-center">
            <h1>Vaccination Program</h1>

            <a id="btn-scan-qr">
                <img src="https://uploads.sitepoint.com/wp-content/uploads/2017/07/1499401426qr_icon.svg">
            </a>

            <canvas hidden="" id="qr-canvas"></canvas>

            <form action="" method="post" id="qrForm">
                @csrf
                <input type="text" name="qrcode" id="qrcode" placeholder="Qr Code...">
                <button type="submit">Verify</button>
            </form>
        </div>
    </div>
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
</body>

</html>

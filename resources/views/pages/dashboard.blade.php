@extends('layout.main_layout')

@section('content')
<nav class="navbar navbar-expand-lg navbar-mainbg">
    <a class="navbar-brand navbar-logo" href="/">{{ env('APP_NAME', 'SL Vaccination Program') }}</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars text-white"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <div class="hori-selector">
                <div class="left"></div>
                <div class="right"></div>
            </div>

            <li class="nav-item active">
                <a class="nav-link" id="dashboard-btn" href="javascript:void(0);">Dashboard</a>
            </li>
            @if (Auth::user()->user_type != 'Vaccinator')
                <li class="nav-item">
                    <a class="nav-link" id="records-btn" href="javascript:void(0);"></i>Records</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id= "adduser" href="javascript:void(0);"></i>Add User</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id= "add-vaccine" href="/vaccine"></i>Add Vaccine</a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link" id="manageaccounts-btn" href="javascript:void(0);">Manage Accounts</a>
                </li> --}}
            @endif

            <li class="nav-item ">
                <a class="nav-link" id="changepass-btn" href="javascript:void(0);">Change Password</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/logout"><i class="fas fa-sign-out-alt"></i>Sign-out</a>
            </li>
        </ul>
    </div>
</nav>


<div class="container" id="maincontent">

    <div id="dashboard">
        <div class="row justify-content-center">
            <div class="col-sm-4 mt-3">

                <div class="row card roundeds shadow">
                    <h5 class="text-center mb-4"><strong>Scan</strong></h5>

                    <div id="scan-alert-box" style="display:none; margin-bottom: 0.5rem !important" class="mt-2 container alert alert-danger" role="alert">
                    </div>

                    <center>
                        <a id="btn-scan-qr">
                            <img src="https://uploads.sitepoint.com/wp-content/uploads/2017/07/1499401426qr_icon.svg">
                        </a>
                    </center>

                    <canvas hidden="" id="qr-canvas"></canvas>
                    <p class="text-center">Click QR image to scan</p>
                    <form action="" method="post" id="start-vaccination-form">
                        <input type="text" class="form-control" name="qr_code" id="qr_code" placeholder="Qr Code...">

                        <input type="hidden" name="users_id" value="{{Auth::user()->id}}">
                        @if (Auth::user()->user_type == 'Admin')
                            <div class="form-group">
                                <label for="municipality-vaccination"></label>
                                <select class="form-control" name="municipality-vaccination" id="municipality-vaccination"></select>
                            </div>

                        @else

                            <input type="hidden" name="municipality-vaccination" value="{{ Auth::user()->municipality }}">
                        @endif
                        <center>
                            <button type="submit" id="vaccination-btn"
                                class="btn btn-confirm mt-2 mb-3 btn-verify">
                                Start Vaccination
                            </button>
                        </center>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <div id="records" style="display: none">
        <div class="row justify-content-center mt-3">
            <div class="col-sm-7 mt-3">
                <form action="" method="post" class="row" id="records-form">
                    <div class="col row">
                        <div class="col form-group">
                            <label for="table-name" > <small> Table Name </small></label>
                            <select name="table-name" id="table-name" class="form-control ">
                                <option value="User">User</option>
                                <option value="Vaccinated">Vaccinated</option>
                            </select>
                        </div>

                        @if (Auth::user()->user_type == 'Admin')
                        <div class="col form-group">
                            <label for="table-municipality" class=""> <small> Municipality </small></label>
                            <select name="table-municipality" class="form-control " id="table-municipality"></select>
                        </div>

                        @else
                        <input type="hidden" name="table-municipality" value="{{ Auth::user()->municipality }}">
                        @endif

                        <div class="form-group">
                                <label for="date_filter">Date</label>
                                <input type="date" id="date_filter" name="date_filter" class="form-control">
                        </div>

                    </div>

                    <div class="form-group align-content-center col-sm-3 mt-sm-4 pt-sm-3">
                        <button class="btn btn-primary" type="submit" id="records-search-btn">Search</button>
                    </div>
                </form>
            </div>
        </div>
        <hr>

        <div class="row card roundeds shadow">
            <div id="maintable"></div>
            <div id="datatable" class="table-responsive">
                <h5 class="text-center text-secondary">No data to be display</h5>
            </div>
        </div>

    </div>

    @if (Auth::user()->user_type != 'Vaccinator')

    <div id="add-user" style="display: none;">
        <div class="row justify-content-center">
            <div class="col-sm-9 mt-3">

                <div class="row card roundeds shadow">
                    <h5 class="text-center mb-4"><strong>Register User</strong></h2>
                        <form action="/register-user" method="post" id="adduserform">
                            {{-- @csrf --}}
                            <div id="alert-box" style="display:none; margin-bottom: 2rem !important" class="mt-2 container alert alert-danger" role="alert">
                            </div>


                            <input type="hidden" name="auth_user" value="{{ Auth::id() }}">
                            <div class="form-group">
                                <label for="name_of_facility">Name of Facility</label>
                                <input type="text" name="name_of_facility" id="name_of_facility" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="prc_license_number">PRC License Number</label>
                                <input type="text" name="prc_license_number" id="prc_license_number" class="form-control">
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <label for="firstname">Firstname</label>
                                    <input type="text" class="form-control" name="firstname" id="firstname">
                                </div>
                                <div class="col-sm-6">
                                    <label for="lastname">Lastname</label>
                                    <input type="text" class="form-control" name="lastname" id="lastname">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" name="username" id="username" class="form-control">
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" name="password" id="password">
                                </div>
                                <div class="col-sm-6">
                                    <label for="confirmPass">Confirm Password</label>
                                    <input type="password" class="form-control" name="confirmPass" id="confirmPass">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="usertype">User Type</label>
                                <select name="user_type" class="form-control" id="user_type">
                                    @if (Auth::user()->user_type == 'Admin')
                                        <option value="Admin">Admin</option>
                                        <option value="LGU">LGU</option>
                                    @endif
                                    <option value="Vaccinator">Vaccinator</option>
                                    <option value="Monitoring">Monitoring</option>
                                </select>
                            </div>
                            @if (Auth::user()->user_type == 'Admin')
                            <div class="form-group">
                                <label for="municipality">Municipality</label>
                                <select type="text" id="municipality" name="municipality" class="form-control">
                                    <option value=""> </option>
                                </select>
                            </div>
                            @else
                                <input type="hidden" name="municipality" value="{{ Auth::user()->municipality }}">
                            @endif

                            <div class="form-group">
                                <label for="role">Role</label>
                                <input type="text" id="role" name="role" class="form-control" placeholder="e.g (team_leader, counseling_nurse, encoder)">
                            </div>

                            <div class="form-group">
                                <button type="submit" id="registerbtn" class="btn btn-primary ">Register User</button>
                            </div>
                        </form>
                </div>

            </div>
        </div>
    </div>

    @endif


    <div id="update-password" style="display: none;">
        <div class="row justify-content-center">
            <div class="col-sm-9 mt-3">

                <div class="row card roundeds shadow">
                    <h5 class="text-center mb-4"><strong>Update Password</strong></h2>
                        <form action="/register-password" method="post" id="updatepassform">
                            {{-- @csrf --}}
                            <div id="update-alert-box" style="display:none; margin-bottom: 2rem !important" class="mt-2 container alert alert-danger" role="alert">
                            </div>

                            <input type="hidden" name="auth_user" value="{{ Auth::id() }}">

                            <div class="form-group">
                                <label for="oldpassword">Old Password</label>
                                <input type="password" name="oldpassword" id="oldpassword" class="form-control">
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <label for="newpassword">New Password</label>
                                    <input type="password" class="form-control" name="newpassword" id="newpassword">
                                </div>
                                <div class="col-sm-6">
                                    <label for="confirmPass">Confirm New Password</label>
                                    <input type="password" class="form-control" name="confirmPass" id="confirmPass">
                                </div>
                            </div>


                            <div class="form-group">
                                <button type="submit" id="updatebtn" height="1rem" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                </div>

            </div>
        </div>
    </div>
</div>


{{-- Dashboard scanner --}}

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

{{-- End of Dashboard scanner --}}

@endsection

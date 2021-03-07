<nav class="navbar navbar-expand-lg navbar-mainbg">
    <a class="navbar-brand navbar-logo" href="javascript:void(0);">{{ env('APP_NAME', 'SL Vaccination Program') }}</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars text-white"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <div class="hori-selector"><div class="left"></div><div class="right"></div></div>

            <li class="nav-item active">
                <a class="nav-link" href="javascript:void(0);"><i class="fas fa-tachometer-alt"></i>Dashboard</a>
            </li>
            @if (Auth::user()->user_type == 'Admin' || Auth::user()->user_type == "LGU")
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);"><i class="far fa-address-book"></i>Records</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);"><i class="far fa-address-book"></i>Add User</a>
                </li>

            @endif

            <li class="nav-item active">
                <a class="nav-link" href="javascript:void(0);"><i class="fas fa-tachometer-alt"></i>Manage Account</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/logout"><i class="fas fa-sign-out-alt"></i>Sign-out</a>
            </li>
        </ul>
    </div>
</nav>

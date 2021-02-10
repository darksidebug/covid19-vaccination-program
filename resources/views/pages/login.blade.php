@extends('layout.main_layout')

@section('content')
<div class="container">
    <div class="card card-container roundeds shadow">
        <img id="profile-img" class="profile-img-card" src="https://trace.southernleyte.org.ph/assets/img/SouthernLeyteLogo.png" />
        <p id="profile-name" class="profile-name-card">COVID-19 VACCINATION PROGRAM</p>

        <form class="form-signin pt-4">
            <input type="text" id="inputEmail" class="form-control" placeholder="Username" required autofocus>
            <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
            <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Sign in</button>
        </form><!-- /form -->

    </div>
</div>
@include('templates.footer')
@endsection

@extends('layouts.auth')

@section('title', 'Register')

@section('subHeader', 'Register for a new Account')

@section('content')

    <div class="form-row">
        <div class="wrap-input100 validate-input" data-validate="Enter username">
            <input class="input100" type="text" name="name" placeholder="Business name">
            <span class="focus-input100" data-placeholder="&#xf207;"></span>
        </div>

        <div class="col">
            <div class="wrap-input100 validate-input" data-validate="Enter Inc number">
                <input class="input100" type="text" name="name" placeholder="Registration number">
                <span class="focus-input100" data-placeholder="&#x0023;"></span>
            </div>
        </div>
        <div class="col">
            <div class="wrap-input100 validate-input" data-validate="Enter username">
                <input class="input100" type="tel" id="phone" name="tel">
            </div>
        </div>
    </div>

    <div class="wrap-input100 validate-input" data-validate="Enter email">
        <input class="input100" type="password" name="pass" placeholder="Email">
        <ion-icon name="mail"></ion-icon>
        <span class="focus-input100" data-placeholder="&#x2709;"></span>
    </div>

    <div class="form-row">
        <div class="col">
            <div class="wrap-input100 validate-input" data-validate="Enter password">
                <input class="input100" type="password" name="pass" placeholder="Password">
                <span class="focus-input100" data-placeholder="&#xf191;"></span>
            </div>
        </div>
        <div class="col">
            <div class="wrap-input100 validate-input" data-validate="Re-enter password">
                <input class="input100" type="password" name="pass" placeholder="Re-type password">
                <span class="focus-input100" data-placeholder="&#xf191;"></span>
            </div>
        </div>
    </div>

	<div class="contact100-form-checkbox">
		<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
		<label class="label-checkbox100" for="ckb1">
			Agree to our terms and conditions
		</label>
    </div>

    <div class="container-login100-form-btn d-flex text-center">
		<a class="login100-form-btn" href="http://localhost/Ocaja/public/custom-home">
            Register
        </a>
	</div>
@endsection

@section('button', 'Register')

@section('alternativeLink')
	<span class="text-muted">Already a member? </span>
    <a class="txt1 text-info pl-2 ml-2" href="http://localhost/Ocaja/public/custom-login">
        <span class="fa fa-login"></span>
        Log In
    </a>
@endsection

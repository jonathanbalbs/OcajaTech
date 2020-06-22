@extends('layouts.auth')

@section('title', 'Log In')

@section('subHeader', 'Log into your account')

@section('content')
    <div class="wrap-input100 validate-input" data-validate="Enter email">
		<input class="input100" type="email" name="email" placeholder="Email">
		<span class="focus-input100" data-placeholder="&#xf207;"></span>
	</div>

	<div class="wrap-input100 validate-input" data-validate="Enter password">
		<input class="input100" type="password" name="pass" placeholder="Password">
		<span class="focus-input100" data-placeholder="&#xf191;"></span>
	</div>

	<div class="contact100-form-checkbox">
		<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
		<label class="label-checkbox100" for="ckb1">
			Remember me
		</label>
	</div>

	<div class="container-login100-form-btn d-flex text-center">
		<a class="login100-form-btn" href="http://localhost/Ocaja/public/custom-home">
			Log In
        </a>
	</div>
@endsection

@section('alternativeLink')
    <a class="txt1 text-info" href="#">
        <span class="fa fa-lock"></span>
        Forgot Password?
    </a>

    <a class="txt1 text-info pl-2 ml-2" href="http://localhost/Ocaja/public/custom-register">
        <span class="fa fa-pencil"></span>
        Register
    </a>
@endsection

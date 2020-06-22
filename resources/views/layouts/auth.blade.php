<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <title>@yield('title')</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Styles -->
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('fonts/iconic/css/material-design-iconic-font.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/animate/animate.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/css-hamburgers/hamburgers.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/animsition/css/animsition.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/select2/select2.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/daterangepicker/daterangepicker.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('../vendor/jackocnr/intl-tel-input/build/css/intlTelInput.min.css') }}">

    <!--Scrips-->
    <script src="{{ asset('vendor/jquery/jquery-3.2.1.min.js') }}"></script>
	<script src="{{ asset('vendor/animsition/js/animsition.min.js') }}"></script>
	<script src="{{ asset('vendor/bootstrap/js/popper.js') }}"></script>
	<script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('vendor/select2/select2.min.js') }}"></script>
	<script src="{{ asset('vendor/daterangepicker/moment.min.js') }}"></script>
	<script src="{{ asset('vendor/daterangepicker/daterangepicker.js') }}"></script>
	<script src="{{ asset('vendor/countdowntime/countdowntime.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('../vendor/jackocnr/intl-tel-input/build/js/intlTelInput.js') }}"></script>
    <script src="{{ asset('../vendor/jackocnr/intl-tel-input/build/js/utils.js') }}"></script>

</head>

<body>

	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/kp2.jpg');">
			<div class="wrap-login100 shadow-lg">
				<form class="login100-form validate-form">

					<div class="login100-form-title p-t-27 d-block">
						Ocaja Technologies
					</div>

					<div class="login100-form-sub-title">
						@yield('subHeader')
					</div>

					@yield('content')

					<div class="text-center p-t-70">
						@yield('alternativeLink')
					</div>
				</form>
			</div>
		</div>
	</div>
	<script>
		var input = document.querySelector("#phone");
		window.intlTelInput(input, {
            preferredCountries: ['us', 'gb', 'ug', 'ke'],
            initialCountry: "ug",
            utilsScript: "../vendor/jackocnr/intl-tel-input/build/js/utils.js"
        });
	</script>
</body>

</html>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>MEET SCHEDULE | Sign In</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="/frontend/img/logomeets.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/signin/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/signin/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/signin/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/signin/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/signin/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/signin/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/signin/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/signin/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/signin/css/util.css">
    <link rel="stylesheet" type="text/css" href="/signin/css/main.css">
    @yield('css')
    <style>
    .wrap-login100 {
        background: #fff;
        -webkit-box-shadow: 0 0px 0px 0 rgba(0,0,0,.5);
        border-radius: 20px;
    }
    .container-login100::before {
        background: -webkit-linear-gradient(left,rgba(144, 194, 61,0.8),rgba(190, 0, 41,0.5));
    }
    .login100-form-btn {
        background-color: #90c73e;
        -webkit-box-shadow: 0 0px 0px 0px rgba(189, 89, 212, 0.5);
    }
    .login100-form-btn:hover {
        background-color: #90c73e;
        -webkit-box-shadow: 0 0px 0px 0px rgba(189, 89, 212, 0.8);
        transition: all ease-in .3s;
        transform: scale(1.15);
    }
    .input100 {
        color: #000000;
        display: ;
    }
    .p-t-80 {
        padding-top: 15px;
    }
    .container-login100 {
        padding-top: 2px;
        padding-bottom: 170px;
    }
    </style>
<!--===============================================================================================-->
</head>
<body>


	@yield('content')



	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="/signin/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="/signin/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="/signin/vendor/bootstrap/js/popper.js"></script>
	<script src="/signin/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="/signin/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="/signin/vendor/daterangepicker/moment.min.js"></script>
	<script src="/signin/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="/signin/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
    <script src="/signin/js/main.js"></script>
    @yield('js')

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MEET SCHEDULE | Sign Up</title>

    <!-- Font Icon -->
    	<link rel="icon" type="image/png" href="/frontend/img/logomeets.png"/>

    <link rel="stylesheet" href="/signup/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="/signup/css/style.css">
    <style>
        .container {
            width: 470px;
        }
        .signup-content {
            padding: 50px 55px;
        }
        body {
            padding: 9px 0;
        }
        .form-submit{
            background-image: linear-gradient(to left, #90C73E, #90C73E);
        }
    </style>
    @yield('css')
</head>
<body>

    <div class="main">
        @yield('content')
    </div>

    <!-- JS -->
    <script src="/signup/vendor/jquery/jquery.min.js"></script>
    <script src="/signup/js/main.js"></script>
    @yield('js')
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>

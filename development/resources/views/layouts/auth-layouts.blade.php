<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Favicon icon-->
    <link
        rel="shortcut icon"
        type="image/png"
        href="{{asset('admin/')}}/assets/images/logos/favicon.png"
    />

    <!-- Core Css -->
    <link rel="stylesheet" href="{{asset('admin/')}}/assets/css/styles.css" />
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <title>DOCTUCH</title>
</head>

<body>
<!-- Preloader -->
<div class="preloader">
    <img src="{{asset('admin/')}}/assets/images/logos/favicon.png" alt="loader" class="lds-ripple img-fluid" />
</div>
@yield('auth-content')

<div class="dark-transparent sidebartoggler"></div>
<!-- Import Js Files -->

<script src="{{asset('admin/')}}/assets/libs/jquery/dist/jquery.min.js"></script>
<script src="{{asset('admin/')}}/assets/js/app.min.js"></script>
<script src="{{asset('admin/')}}/assets/js/app.init.js"></script>
<script src="{{asset('admin/')}}/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('admin/')}}/assets/libs/simplebar/dist/simplebar.min.js"></script>

<script src="{{asset('admin/')}}/assets/js/sidebarmenu.js"></script>
<script src="{{asset('admin/')}}/assets/js/theme.js"></script>

</body>


<!-- Mirrored from demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/authentication-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 03 Feb 2024 07:15:32 GMT -->
</html>

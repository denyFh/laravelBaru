<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="description" content="Kode Koding Admin">

    <title>Admin Dashboard</title>
    <!-- Favicon-->
    <link href="{{ asset('assets/images/favicon/icon.ico') }}" rel="icon">
    <!-- Custom Css -->
    <link rel="stylesheet" href="{{ asset('assets/css/libraries.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/admin-style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/authentication.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/color_skins.css') }} ">
</head>

<body class="theme-cyan authentication sidebar-collapse">
    <div class="page-header">
        <div class="page-header-image" style="background-image:url(assets/images/admin/login.jpg)"></div>
        <div class="container">
            <div class="col-md-12 content-center">
                <div class="card-plain">
                    <form class="form" method="" action="">
                        <div class="header">
                            <div class="logo-container">
                                <img src="assets/images/logo/logo-light-2.png" alt="logo">
                            </div>
                            <h5>LOGIN</h5>
                        </div>
                        <div class="content">
                            <div class="input-group input-lg">
                                <input type="text" class="form-control" placeholder="Enter User Name">
                            </div>
                            <div class="input-group input-lg">
                                <input type="password" placeholder="Password" class="form-control" />
                            </div>
                        </div>
                        <div class="footer text-center">
                            <a href="{{'/admin'}}"
                                class="btn l-amber btn-round btn-lg btn-block waves-effect waves-light">SIGN IN</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery Core Js -->
    <script src="assets/bundles/libscripts.bundle.js"></script>
    <script src="assets/bundles/vendorscripts.bundle.js"></script>
    <!-- Lib Scripts Plugin Js -->

    <script>
        $(".navbar-toggler").on('click', function() {
            $("html").toggleClass("nav-open");
        });
        //=============================================================================
        $('.form-control').on("focus", function() {
            $(this).parent('.input-group').addClass("input-group-focus");
        }).on("blur", function() {
            $(this).parent(".input-group").removeClass("input-group-focus");
        });
    </script>
</body>

</html>

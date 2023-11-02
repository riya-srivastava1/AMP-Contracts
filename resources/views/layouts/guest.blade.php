<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content="" name="description" />
    <meta content="csrf-token" name="{{ csrf_token() }}" />
    <title>Amp Contract Panel</title>
    <link rel="icon" href="{{ asset('assets/images/amp-favicon.svg') }}" type="image/png">


    <!-- ================== BEGIN core-css ================== -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link href="{{ asset('assets/css/vendor.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/default/app.min.css') }}" rel="stylesheet" />
    <!-- ================== END core-css ================== -->
</head>

<body class='pace-top'>
    <!-- BEGIN #loader -->
    <div id="loader" class="app-loader">
        <span class="spinner"></span>
    </div>
    <!-- END #loader -->
    <!-- BEGIN #app -->
    <div id="app" class="app">
        <!-- BEGIN login -->
        <div class="login login-v2 fw-bold">
            <!-- BEGIN login-cover -->
            <div class="login-cover">
                <div class="login-cover-img"
                    style="background-image: url({{ asset('assets/images/ehs.webp') }})"
                    data-id="login-cover-image"></div>
                <div class="login-cover-bg"></div>
            </div>
            <!-- END login-cover -->
            <!-- BEGIN login-container -->
            <div class="login-container">
                <!-- BEGIN login-header -->
                <div class="login-header">
                    <div class="brand">
                        <div class="d-flex align-items-center">
                             <b>Amp Contract Panel</b>
                        </div>
                    </div>
                </div>
                <!-- END login-header -->
                <!-- BEGIN login-content -->
                {{ $slot }}
                <!-- End login-content -->
            </div>
            <!-- END login-container -->
        </div>
        <!-- END login -->
        <!-- BEGIN scroll-top-btn -->
        <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top"
            data-toggle="scroll-to-top"><i class="fa fa-angle-up"></i></a>
        <!-- END scroll-top-btn -->
    </div>
    <!-- END #app -->

    <!-- ================== BEGIN core-js ================== -->
    <script src="{{ asset('assets/js/vendor.min.js') }}"></script>
    <script src="{{ asset('assets/js/app.min.js') }}"></script>
    <!-- ================== END core-js ================== -->
    <!-- ================== BEGIN page-js ================== -->
    <script src="{{ asset('assets/js/demo/login-v2.demo.js') }}"></script>
    <!-- ================== END page-js ================== -->

    <script>
        // Wait for the document to be ready
        $(document).ready(function() {
            if ($('.status-msg').css('display') == 'block') {
                setTimeout(function() {
                    $('.status-msg').hide();
                }, 3000);
            }
        });
    </script>
</body>

</html>

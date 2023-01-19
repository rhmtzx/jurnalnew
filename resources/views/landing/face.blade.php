<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from demo.epic-webdesign.com/tf-essentials/v1/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Jan 2023 01:09:00 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="">
    <meta name="description" content="">

    <title>J-On | Jurnal Online</title>

    <!-- Loading Bootstrap -->
    <link href="{{ asset('landing/demo.epic-webdesign.com/tf-essentials/v1/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Loading Template CSS -->
    <link href="{{ asset('landing/demo.epic-webdesign.com/tf-essentials/v1/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('landing/demo.epic-webdesign.com/tf-essentials/v1/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('landing/demo.epic-webdesign.com/tf-essentials/v1/css/style-magnific-popup.css') }}" rel="stylesheet">

    <!-- Awsome Fonts -->
    <link rel="stylesheet" href="{{ asset('landing/demo.epic-webdesign.com/tf-essentials/v1/css/all.min.css') }}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Dosis:500,600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300i,400,400i,600,700" rel="stylesheet">

    <!-- Font Favicon -->
    <link rel="shortcut icon" href="{{ asset('landing/demo.epic-webdesign.com/tf-essentials/v1/images/favicon.ico') }}">

</head>

<body>

    <!--begin header -->
    @include('landing.headerl')
    <!--end header -->

    @yield('content')

    <!--begin footer -->
    <div class="footer">

        <!--begin container -->
        <div class="container">

            <!--begin row -->
            <div class="row">

                <!--begin col-md-12 -->
                <div class="col-md-12 text-center">

                    <p>Copyright © 2019 Essentials. Designed by <a href="https://themeforest.net/user/epic-themes/portfolio?ref=Epic-Themes" target="_blank">Epic-Themes</a></p>

                    <!--begin footer_social -->
                    <ul class="footer_social">

                        <li>
                            <a href="#">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="fab fa-pinterest"></i>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="fab fa-facebook-square"></i>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="fab fa-skype"></i>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="fab fa-dribble"></i>
                            </a>
                        </li>

                    </ul>
                    <!--end footer_social -->

                </div>
                <!--end col-md-6 -->

            </div>
            <!--end row -->

        </div>
        <!--end container -->

    </div>
    <!--end footer -->


<!-- Load JS here for greater good =============================-->
<script src="{{ asset('landing/demo.epic-webdesign.com/tf-essentials/v1/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('landing/demo.epic-webdesign.com/tf-essentials/v1/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('landing/demo.epic-webdesign.com/tf-essentials/v1/js/jquery.scrollTo-min.js') }}"></script>
<script src="{{ asset('landing/demo.epic-webdesign.com/tf-essentials/v1/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('landing/demo.epic-webdesign.com/tf-essentials/v1/js/jquery.nav.js') }}"></script>
<script src="{{ asset('landing/demo.epic-webdesign.com/tf-essentials/v1/js/wow.js') }}"></script>
<script src="{{ asset('landing/demo.epic-webdesign.com/tf-essentials/v1/js/plugins.js') }}"></script>
<script src="{{ asset('landing/demo.epic-webdesign.com/tf-essentials/v1/js/custom.js') }}"></script>


</body>

<!-- Mirrored from demo.epic-webdesign.com/tf-essentials/v1/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Jan 2023 01:09:12 GMT -->
</html>

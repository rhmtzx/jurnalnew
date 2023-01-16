<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="zxx">
<!--<![endif]-->
<!-- Begin Head -->


<!-- Mirrored from kamleshyadav.com/html/splashdash/HTML/bootstrep-5/splashdash-admin-template/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 Jan 2023 15:25:27 GMT -->
<head>
    <title>SplashDash</title>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="MobileOptimized" content="320">
    <!--Start Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('templatejr/kamleshyadav.com/html/splashdash/HTML/bootstrep-5/splashdash-admin-template/assets/css/fonts.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('templatejr/kamleshyadav.com/html/splashdash/HTML/bootstrep-5/splashdash-admin-template/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('templatejr/kamleshyadav.com/html/splashdash/HTML/bootstrep-5/splashdash-admin-template/assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('templatejr/kamleshyadav.com/html/splashdash/HTML/bootstrep-5/splashdash-admin-template/assets/css/icofont.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('templatejr/kamleshyadav.com/html/splashdash/HTML/bootstrep-5/splashdash-admin-template/assets/css/style.css') }}">
	<link rel="stylesheet" id="theme-change" type="text/css" href="#">
    <!-- Favicon Link -->
    <link rel="shortcut icon" type="image/png" href="assets/images/favicon.png">
</head>

<body>
	<div class="loader">
	  <div class="spinner">
		<img src="{{ asset('templatejr/kamleshyadav.com/html/splashdash/HTML/bootstrep-5/splashdash-admin-template/assets/images/loader.gif') }}" alt=""/>
	  </div>
	</div>
    <!-- Main Body -->
    <div class="page-wrapper">
        <!-- Header Start -->
       @include('layout.header')
        <!-- Sidebar Start -->
        @include('layout.sidebar')
        <!-- Container Start -->
        @yield('content')
    </div>


    <!-- Preview Setting Box -->
	<div class="slide-setting-box">
        <div class="slide-setting-holder">
            <div class="setting-box-head">
                <h4>Dashboard Demo</h4>
                <a href="javascript:void(0);" class="close-btn">Close</a>
            </div>
            <div class="setting-box-body">
				<div class="sd-light-vs">
					<a href="index.html">
						Light Version
						<img src="{{ asset('templatejr/kamleshyadav.com/html/splashdash/HTML/bootstrep-5/splashdash-admin-template/assets/images/light.png') }}" alt=""/>
					</a>
				</div>
				<div class="sd-light-vs">
                        <a href="https://kamleshyadav.com/html/splashdash/HTML/bootstrep-5/splashdash-admin-template-dark/index.html">
						dark Version
						<img src="{{ asset('templatejr/kamleshyadav.com/html/splashdash/HTML/bootstrep-5/splashdash-admin-template/assets/images/dark.png') }}" alt=""/>
					</a>
				</div>
            </div>
			<div class="sd-color-op">
				<h5>color option</h5>
				<div id="style-switcher">
					<div>
						<ul class="colors">
							<li>
								<p class='colorchange' id='color'>
								</p>
							</li>
							<li>
								<p class='colorchange' id='color2'>
								</p>
							</li>
							<li>
								<p class='colorchange' id='color3'>
								</p>
							</li>
							<li>
								<p class='colorchange' id='color4'>
								</p>
							</li>
							<li>
								<p class='colorchange' id='color5'>
								</p>
							</li>
							<li>
								<p class='colorchange' id='style'>
								</p>
							</li>
						</ul>
					</div>
				</div>
			</div>
        </div>
    </div>
    <!-- Preview Setting -->


    <!-- Script Start -->
	<script src="{{ asset('templatejr/kamleshyadav.com/html/splashdash/HTML/bootstrep-5/splashdash-admin-template/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('templatejr/kamleshyadav.com/html/splashdash/HTML/bootstrep-5/splashdash-admin-template/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('templatejr/kamleshyadav.com/html/splashdash/HTML/bootstrep-5/splashdash-admin-template/assets/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('templatejr/kamleshyadav.com/html/splashdash/HTML/bootstrep-5/splashdash-admin-template/assets/js/swiper.min.js') }}"></script>
    <script src="{{ asset('templatejr/kamleshyadav.com/html/splashdash/HTML/bootstrep-5/splashdash-admin-template/assets/js/apexchart/apexcharts.min.js') }}"></script>
    <script src="{{ asset('templatejr/kamleshyadav.com/html/splashdash/HTML/bootstrep-5/splashdash-admin-template/assets/js/apexchart/control-chart-apexcharts.js') }}"></script>
	<!-- Page Specific -->
    <script src="{{ asset('templatejr/kamleshyadav.com/html/splashdash/HTML/bootstrep-5/splashdash-admin-template/assets/js/nice-select.min.js') }}"></script>
    <!-- Custom Script -->
    <script src="{{ asset('templatejr/kamleshyadav.com/html/splashdash/HTML/bootstrep-5/splashdash-admin-template/assets/js/custom.js') }}"></script>
</body>


<!-- Mirrored from kamleshyadav.com/html/splashdash/HTML/bootstrep-5/splashdash-admin-template/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 Jan 2023 15:25:54 GMT -->
</html>

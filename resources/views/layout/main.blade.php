<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from codervent.com/syndash/demo/vertical/index2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Nov 2022 01:44:17 GMT -->
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<title>Syndash - Bootstrap4 Admin Template</title>
	<!--favicon-->
	<link rel="icon" href="{{ asset('admin/assets/images/favicon-32x32.png') }}" type="image/png" />
	<!-- Vector CSS -->
	<link href="{{ asset('admin/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet" />
	<!--plugins-->
	<link href="{{ asset('admin/assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
	<link href="{{ asset('admin/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
	<link href="{{ asset('admin/assets/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />
	<!-- loader-->
	<link href="{{ asset('admin/assets/css/pace.min.css') }}a" rel="stylesheet" />
	<script src="{{ asset('admin/assets/js/pace.min.js') }}"></script>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{ asset('admin/assets/css/bootstrap.min.css') }}" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&amp;family=Roboto&amp;display=swap" />
	<!-- Icons CSS -->
	<link rel="stylesheet" href="{{ asset('admin/assets/css/icons.css') }}" />
	<!-- App CSS -->
	<link rel="stylesheet" href="{{ asset('admin/assets/css/app.css') }}" />
	<link rel="stylesheet" href="{{ asset('admin/assets/css/dark-sidebar.css') }}" />
	<link rel="stylesheet" href="{{ asset('admin/assets/css/dark-theme.css') }}" />
</head>

<body>
	<!-- wrapper -->
	<div class="wrapper">
		<!--sidebar-wrapper-->
		@include('layout.sidebar')
		<!--end sidebar-wrapper-->
		<!--header-->
		@include('layout.header')
		<!--end header-->
		<!--page-wrapper-->
		<div class="page-wrapper">
			<!--page-content-wrapper-->
			@yield('content')
			<!--end page-content-wrapper-->
		</div>
		<!--end page-wrapper-->
		<!--start overlay-->
		<div class="overlay toggle-btn-mobile"></div>
		<!--end overlay-->
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
		<!--footer -->
		<div class="footer">
			<p class="mb-0">Syndash @2020 | Developed By : <a href="https://themeforest.net/user/codervent" target="_blank">codervent</a>
			</p>
		</div>
		<!-- end footer -->
	</div>
	<!--start switcher-->
	<div class="switcher-body">
		<button class="btn btn-primary btn-switcher shadow-sm" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"><i class="bx bx-cog bx-spin"></i></button>
		<div class="offcanvas offcanvas-end shadow border-start-0 p-2" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling">
		  <div class="offcanvas-header border-bottom">
			<h5 class="offcanvas-title" id="offcanvasScrollingLabel">Theme Customizer</h5>
			<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
		  </div>
		  <div class="offcanvas-body">
			<h6 class="mb-0">Theme Variation</h6>
			<hr>
			<div class="form-check form-check-inline">
			  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="lightmode" value="option1" checked>
			  <label class="form-check-label" for="lightmode">Light</label>
			</div>
			<hr>
			<div class="form-check form-check-inline">
			  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="darkmode" value="option2">
			  <label class="form-check-label" for="darkmode">Dark</label>
			</div>
			<hr>
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="radio" name="inlineRadioOptions" id="darksidebar" value="option3">
				<label class="form-check-label" for="darksidebar">Semi Dark</label>
			  </div>
			  <hr>
			 <div class="form-check form-check-inline">
				<input class="form-check-input" type="radio" name="inlineRadioOptions" id="ColorLessIcons" value="option3">
				<label class="form-check-label" for="ColorLessIcons">Color Less Icons</label>
			  </div>
		  </div>
		</div>
	   </div>
	   <!--end switcher-->
	<!-- JavaScript -->
	<!-- Bootstrap JS -->
	<script src="{{ asset('admin/assets/js/bootstrap.bundle.min.js') }}"></script>

	<!--plugins-->
	<script src="{{ asset('admin/assets/js/jquery.min.js') }}"></script>
	<script src="{{ asset('admin/assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
	<script src="{{ asset('admin/assets/plugins/metismenu/js/metisMenu.min.js') }}"></script>
	<script src="{{ asset('admin/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
	<!-- Vector map JavaScript -->
	<script src="{{ asset('admin/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
	<script src="{{ asset('admin/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
	<script src="{{ asset('admin/assets/plugins/vectormap/jquery-jvectormap-in-mill.js') }}"></script>
	<script src="{{ asset('admin/assets/plugins/vectormap/jquery-jvectormap-us-aea-en.js') }}"></script>
	<script src="{{ asset('admin/assets/plugins/vectormap/jquery-jvectormap-uk-mill-en.js') }}"></script>
	<script src="{{ asset('admin/assets/plugins/vectormap/jquery-jvectormap-au-mill.js') }}"></script>
	<script src="{{ asset('admin/assets/plugins/apexcharts-bundle/js/apexcharts.min.js') }}"></script>
	<script src="{{ asset('admin/assets/js/index2.js') }}"></script>
	<!-- App JS -->
	<script src="{{ asset('admin/assets/js/app.js') }}"></script>
</body>


<!-- Mirrored from codervent.com/syndash/demo/vertical/index2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Nov 2022 01:44:18 GMT -->
</html>

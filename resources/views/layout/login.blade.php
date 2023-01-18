<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from codervent.com/syndash/demo/vertical/authentication-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Nov 2022 01:45:50 GMT -->
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<title>Syndash - Bootstrap4 Admin Template</title>
	<!--favicon-->
	<link rel="icon" href="{{ asset('admin/assets/images/favicon-32x32.png') }}" type="image/png" />
	<!-- loader-->
	<link href="{{ asset('admin/assets/css/pace.min.css') }}" rel="stylesheet" />
	<script src="{{ asset('admin/assets/js/pace.min.js') }}"></script>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{ asset('admin/assets/css/bootstrap.min.css') }}" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&amp;family=Roboto&amp;display=swap" />
	<!-- Icons CSS -->
	<link rel="stylesheet" href="{{ asset('admin/assets/css/icons.css') }}" />
	<!-- App CSS -->
	<link rel="stylesheet" href="{{ asset('admin/assets/css/app.css') }}" />
</head>

<body class="bg-login">
	<!-- wrapper -->
	<div class="wrapper">
		<div class="section-authentication-login d-flex align-items-center justify-content-center mt-4">
			<div class="row">
				<div class="col-12 col-lg-8 mx-auto">
					<div class="card radius-15 overflow-hidden">
						<div class="row g-0">
							<div class="col-xl-6">
								<div class="card-body p-5">
									<div class="text-center">
										<img src="{{ asset('admin/assets/images/logo-icon.png') }}" width="80" alt="">
										<h3 class="mt-4 font-weight-bold">Welcome Back</h3>
									</div>
									<div class="">
										{{-- <div class="d-grid">
											<a class="btn my-4 shadow-sm btn-white" href="javascript:;"> <span class="d-flex justify-content-center align-items-center">
											<img class="me-2" src="{{ asset('admin/assets/images/icons/search.svg') }}" width="16" alt="Image Description">
											<span>Sign in with Google</span>
												</span>
											</a> <a href="javascript:;" class="btn btn-facebook"><i class="bx bxl-facebook"></i>Sign in with Facebook</a>
										</div> --}}
										{{-- <div class="login-separater text-center mb-4"> <span>OR SIGN IN WITH EMAIL</span>
											<hr>
										</div> --}}
										<div class="form-body">
											<form class="row g-3">
												<div class="col-12">
													<label for="inputEmailAddress" class="form-label">Email Address</label>
													<input type="email" class="form-control" id="inputEmailAddress" placeholder="Email Address">
												</div>
												<div class="col-12">
													<label for="inputChoosePassword" class="form-label">Enter Password</label>
													<div class="input-group" id="show_hide_password">
														<input type="password" class="form-control border-end-0" id="inputChoosePassword" value="12345678" placeholder="Enter Password"> <a href="javascript:;" class="input-group-text bg-transparent"><i class="bx bx-hide"></i></a>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-check form-switch">
														<input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked="">
														<label class="form-check-label" for="flexSwitchCheckChecked">Remember Me</label>
													</div>
												</div>
												<div class="col-md-6 text-end">	<a href="authentication-forgot-password.html">Forgot Password ?</a>
												</div>
												<div class="col-12">
													<div class="d-grid">
														<button type="submit" class="btn btn-primary"><i class="bx bxs-lock-open"></i>Sign in</button>
													</div>
												</div>
												<div class="col-12 text-center">
													<p>Don't have an account yet? <a href="/register">Sign up here</a></p>
												</div>
											</form>
										</div>
									</div>
								</div>
							 </div>
							<div class="col-xl-6 bg-login-color d-flex align-items-center justify-content-center">
								<img src="{{ asset('admin/assets/images/login-images/login-frent-img.jpg') }}" class="img-fluid" alt="...">
							</div>
						</div>
						<!--end row-->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end wrapper -->
</body>

<!--plugins-->
<script src="{{ asset('admin/assets/js/jquery.min.js') }}"></script>
<!--Password show & hide js -->
<script>
	$(document).ready(function () {
		$("#show_hide_password a").on('click', function (event) {
			event.preventDefault();
			if ($('#show_hide_password input').attr("type") == "text") {
				$('#show_hide_password input').attr('type', 'password');
				$('#show_hide_password i').addClass("bx-hide");
				$('#show_hide_password i').removeClass("bx-show");
			} else if ($('#show_hide_password input').attr("type") == "password") {
				$('#show_hide_password input').attr('type', 'text');
				$('#show_hide_password i').removeClass("bx-hide");
				$('#show_hide_password i').addClass("bx-show");
			}
		});
	});
</script>


<!-- Mirrored from codervent.com/syndash/demo/vertical/authentication-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Nov 2022 01:45:51 GMT -->
</html>

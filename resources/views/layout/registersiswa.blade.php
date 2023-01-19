<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from codervent.com/syndash/demo/vertical/authentication-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Nov 2022 01:45:51 GMT -->
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

<body class="bg-register">
	<!-- wrapper -->
	<div class="wrapper">
		<div class="section-authentication-register d-flex align-items-center justify-content-center">
			<div class="row">
				<div class="col-12 col-lg-10 mx-auto">
					<div class="card radius-15 overflow-hidden">
						<div class="row g-0">
							<div class="col-xl-6">
								<div class="card-body p-md-5">
									<div class="text-center">
										<img src="{{ asset('admin/assets/images/logo-icon.png') }}" width="80" alt="">
										<h3 class="mt-4 font-weight-bold"><strong>Buat Akun Siswa</strong></h3>
                                        <br>
									</div>
									<div class="">
										{{-- <div class="d-grid">
											<a class="btn my-4 shadow-sm btn-white" href="javascript:;"> <span class="d-flex justify-content-center align-items-center">
											<img class="me-2" src="{{ asset('admin/assets/images/icons/search.svg') }}" width="16" alt="Image Description">
											<span>Sign Up with Google</span>
												</span>
											</a> <a href="javascript:;" class="btn btn-facebook"><i class="bx bxl-facebook me-1"></i>Sign Up with Facebook</a>
										</div>
										<div class="login-separater text-center mb-4"> <span>OR SIGN UP WITH EMAIL</span>
											<hr>
										</div> --}}
										<div class="form-body">
											<form class="row g-3" action="/registerusersiswa" method="POST">
                                                @csrf
												{{-- <div class="col-sm-6">
													<label for="inputFirstName" class="form-label">First Name</label>
													<input type="email" class="form-control" id="inputFirstName" placeholder="Jhon">
												</div>
												<div class="col-sm-6">
													<label for="inputLastName" class="form-label">Last Name</label>
													<input type="email" class="form-control" id="inputLastName" placeholder="Deo">
												</div> --}}
												<div class="col-12">
													<label for="inputEmailAddress" class="form-label"><strong>Masukkan NIS</strong></label>
													<input type="number" class="form-control" id="inputEmailAddress" name="nissiswa" placeholder="25200507">
												</div>
												
												<div class="col-12">
													<label for="inputEmailAddress" class="form-label"><strong>Masukkan Nama Lengkap Siswa</strong></label>
													<input type="text" class="form-control" id="inputEmailAddress" name="name" placeholder="Muhammad Narendra Syahrafli">
												</div>
												<div class="col-12">
													<label for="inputEmailAddress" class="form-label"><strong>Masukkan Kelas</strong></label>
													<input type="text" class="form-control" id="inputEmailAddress" name="kelas" placeholder="XII">
												</div>
												<div class="col-12">
													<label for="inputEmailAddress" class="form-label"><strong>Masukkan Jurusan</strong></label>
													<input type="text" class="form-control" id="inputEmailAddress" name="jurusan" placeholder="RPL">
												</div>
												<div class="col-12">
													<label for="inputEmailAddress" class="form-label"><strong>Masukkan Alamat Siswa</strong></label>
													<input type="text" class="form-control" id="inputEmailAddress" name="alamatsiswa" placeholder="JL.Ahmad Yani">
												</div>
												<div class="col-12">
													<label for="inputEmailAddress" class="form-label"><strong>Masukkan No Telepon</strong></label>
													<input type="text" class="form-control" id="inputEmailAddress" name="notlpsiswa" placeholder="089 . . .">
												</div>
                                                <div class="col-12">
													<label for="inputEmailAddress" class="form-label"><strong>Masukkan Email</strong></label>
													<input type="email" class="form-control" id="inputEmailAddress" name="email" placeholder="narendra@gmail.com">
												</div>
												<div class="col-12">
													<label for="inputChoosePassword" class="form-label"><strong>Masukkan Password</strong></label>
													<div class="input-group" id="show_hide_password">
														<input type="password" class="form-control border-end-0" name="password" id="inputChoosePassword" placeholder="Enter Password"> <a href="javascript:;" class="input-group-text bg-transparent"><i class="bx bx-hide"></i></a>
													</div>
												</div>
                                                
												{{-- <div class="col-12">
													<label for="inputSelectCountry" class="form-label">Country</label>
													<select class="form-select" id="inputSelectCountry" aria-label="Default select example">
														<option selected="">India</option>
														<option value="1">United Kingdom</option>
														<option value="2">America</option>
														<option value="3">Dubai</option>
													</select>
												</div> --}}
												{{-- <div class="col-12">
													<div class="form-check form-switch">
														<input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked">
														<label class="form-check-label" for="flexSwitchCheckChecked">I read and agree to Terms &amp; Conditions</label>
													</div>
												</div> --}}
												<div class="col-12">
													<div class="d-grid">
														<button type="submit" class="btn btn-primary"><i class="bx bx-user me-1"></i>Daftar</button>
													</div>
												</div>
                                                <div class="col-12">
													<div class="d-grid">
														<a href="/landinghome" class="btn btn-primary">Kembali</a>
													</div>
												</div>
                                                <div class="col-12 text-center">
													<p>Sudah Punya Akun? <a href="/login">Login Disini</a></p>
												</div>
											</form>
										</div>
									</div>

								</div>
							</div>
							<div class="col-xl-6 bg-login-color d-flex align-items-center justify-content-center">
                                <img src="{{ asset('admin/assets/images/login-images/register-frent-img.jpg') }}" class="img-fluid" alt="...">
							</div>
						</div>
						<!--end row-->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end wrapper -->
	<!-- JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
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
</body>


<!-- Mirrored from codervent.com/syndash/demo/vertical/authentication-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Nov 2022 01:45:53 GMT -->
</html>

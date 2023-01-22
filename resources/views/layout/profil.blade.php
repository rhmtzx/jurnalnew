@extends('layout.main')
@section('content')

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from codervent.com/syndash/demo/vertical/user-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Nov 2022 01:46:01 GMT -->
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<title>J-On - Jurnal Online</title>
	<!--favicon-->
	<link rel="icon" href="{{ asset('admin/assets/images/favicon-32x32.png')}}" type="image/png" />
	<!--plugins-->
	<link href="{{ asset('admin/assets/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet" />
	<link href="{{ asset('admin/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" />
	<link href="{{ asset('admin/assets/plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet" />
	<!-- loader-->
	<link href="{{ asset('admin/assets/css/pace.min.css')}}" rel="stylesheet" />
	<script src="{{ asset('admin/assets/js/pace.min.js')}}"></script>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{ asset('admin/assets/css/bootstrap.min.css')}}" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&amp;family=Roboto&amp;display=swap" />
	<!-- Icons CSS -->
	<link rel="stylesheet" href="{{ asset('admin/assets/css/icons.css')}}" />
	<!-- App CSS -->
	<link rel="stylesheet" href="{{ asset('admin/assets/css/app.css')}}" />
	<link rel="stylesheet" href="{{ asset('admin/assets/css/dark-sidebar.css')}}" />
	<link rel="stylesheet" href="{{ asset('admin/assets/css/dark-theme.css')}}" />
</head>

<body>
	<!-- wrapper -->
	<div class="wrapper">
		<!--sidebar-wrapper-->
		
		<!--end sidebar-wrapper-->
		<!--header-->
		
		<!--end header-->
		<!--page-wrapper-->
		<div class="page-wrapper">
			<!--page-content-wrapper-->
			<div class="page-content-wrapper">
				<div class="page-content">
					<!--breadcrumb-->
					<div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
						<div class="breadcrumb-title pe-3">Profile</div>
						<div class="ps-3">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb mb-0 p-0">
									<li class="breadcrumb-item"><a href="javascript:;"><i class='bx bx-home-alt'></i></a>
									</li>
									<li class="breadcrumb-item active" aria-current="page">User Profile</li>
								</ol>
							</nav>
						</div>
						<!-- <div class="ms-auto">
							<div class="btn-group">
								<button type="button" class="btn btn-primary">Settings</button>
								<button type="button" class="btn btn-primary bg-split-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
								</button>
								<div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">	<a class="dropdown-item" href="javascript:;">Action</a>
									<a class="dropdown-item" href="javascript:;">Another action</a>
									<a class="dropdown-item" href="javascript:;">Something else here</a>
									<div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
								</div>
							</div>
						</div> -->
					</div>
					<!--end breadcrumb-->
					<div class="user-profile-page">
						<div class="card radius-15">
							<div class="card-body">
								<div class="row">
									<div class="col-12 col-lg-15 border-right">
										<div class="d-md-flex align-items-center">
											<div class="mb-md-0 mb-3">
												<img src="{{ asset('admin/assets/images/avatars/avatar-1.png')}}" class="rounded-circle shadow" width="130" height="130" alt="" />
											</div>
											<div class="ms-md-4 flex-grow-1">
												<div class="d-flex align-items-center mb-1">
													<h4 class="mb-0">{{ auth()->user()->name }}</h4>
													<br>
													<!-- <p class="mb-0 ms-auto">$44/hr</p> -->
												</div>
												<p class="mb-0 text-muted">{{ auth()->user()->role }}</p>
												<!-- <p class="text-primary"><i class='bx bx-buildings'></i> Epic Coders</p> -->
												<!-- <button type="button" class="btn btn-primary">Connect</button> -->
												<!-- <button type="button" class="btn btn-outline-secondary ml-2">Resume</button> -->
											</div>
										</div>
									</div>
									<!-- <div class="col-12 col-lg-5">
									    <table class="table table-sm table-borderless mt-md-0 mt-3">
											<tbody>
												<tr>
													<th>Availability:</th>
													<td>Full-time (40hr/wk) <span class="badge badge-success">available</span>
													</td>
												</tr>
												<tr>
													<th>Age:</th>
													<td>27</td>
												</tr>
												<tr>
													<th>Location:</th>
													<td>Sankt, Petersburg, Russia</td>
												</tr>
												<tr>
													<th>Years experience:</th>
													<td>6</td>
												</tr>
											</tbody>
										</table> 
										<div class="mb-3 mb-lg-0"> 
											<a href="javascript:;" class="btn btn-sm btn-link"><i class='bx bxl-github'></i></a>
											<a href="javascript:;" class="btn btn-sm btn-link"><i class='bx bxl-twitter'></i></a>
											<a href="javascript:;" class="btn btn-sm btn-link"><i class='bx bxl-facebook'></i></a>
											<a href="javascript:;" class="btn btn-sm btn-link"><i class='bx bxl-linkedin'></i></a>
											<a href="javascript:;" class="btn btn-sm btn-link"><i class='bx bxl-dribbble'></i></a>
											<a href="javascript:;" class="btn btn-sm btn-link"><i class='bx bxl-stack-overflow'></i></a>
										</div>
									</div> -->
								</div>
								<br>
								<!--end row-->
								<ul class="nav nav-pills">
									<!-- <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab" href="#Edit-Profile"><span class="p-tab-name">Edit Profile</span><i class='bx bx-message-edit font-24 d-sm-none'></i></a>
									</li> -->
									<!-- <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#Experience"><span class="p-tab-name">Experience</span><i class='bx bx-donate-blood font-24 d-sm-none'></i></a>
									</li>
									<li class="nav-item"> <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#Biography"><span class="p-tab-name">Biography</span><i class='bx bxs-user-rectangle font-24 d-sm-none'></i></a>
									</li> -->
									
								</ul>
								<div class="tab-content mt-3">
									<div class="tab-pane fade show active" id="Edit-Profile">
										<div class="card shadow-none border mb-0 radius-15">
											<div class="card-body">
												<div class="form-body">
													<div class="row">
														<div class="col-12 col-lg-6 border-right">
															<form class="row g-3">
																<div class="col-12">
																	<label class="form-label">Nama Dudi</label>
																	<input type="text" name="name" readonly value="{{ Auth::user()->name }}" class="form-control">
																</div>
																
																<div class="col-12">
																	<label class="form-label">Nama Kepala Direktur</label>
																    <input type="text" name="namakepdik" readonly value="{{ Auth::user()->namakepdik }}" class="form-control">
																</div>
																<div class="col-12">
																	<label class="form-label">Alamat Dudi</label>
																    <input type="text" name="alamatdudi" readonly value="{{ Auth::user()->alamatdudi }}" class="form-control">
																</div>
																<!-- <div class="col-12">
																	<label class="form-label">Phone</label>
																    <input type="text" value="99-10-XXX-XXX" class="form-control">
																</div>
																<div class="col-12">
																	<label class="form-label">Address</label>
																    <input type="text" value="116-B, Cutela Colony, Sydney, Australia" class="form-control">
																</div>
																<div class="col-12">
																	<label class="form-label">Nation</label>
																    <input type="text" value="Australia" class="form-control">
																</div> -->
															</form>														
														</div>
														<div class="col-12 col-lg-6">
															<form class="row g-3">
																<div class="col-12">
																	<label class="form-label">Email</label>
																	<input type="email" readonly value="{{ Auth::user()->email }}" class="form-control">
																</div>
																<div class="col-12">
																	<label class="form-label">Password</label>
																	<input type="password" readonly value="{{ Auth::user()->password }}" class="form-control">
																</div>
																<div class="col-12">
																	<label class="form-label">No Telepon</label>
																	<input type="number" readonly value="{{ Auth::user()->notelepon }}" class="form-control">
																</div>
																<!-- <div class="col-12">
																	<p class="mb-0">Date of Birth</p>
																</div>
																<div class="col-12 col-lg-4">
																	<select class="form-control">
																		<option>January</option>
																		<option>February</option>
																		<option selected>March</option>
																		<option>April</option>
																		<option>May</option>
																		<option>June</option>
																		<option>July</option>
																		<option>August</option>
																		<option>September</option>
																		<option>October</option>
																		<option>November</option>
																		<option>December</option>
																	</select>
																</div>
																<div class="col-12 col-lg-4">
																	<select class="form-control">
																		<option>01</option>
																		<option>02</option>
																		<option>03</option>
																		<option>04</option>
																		<option>05</option>
																		<option>06</option>
																		<option>07</option>
																		<option>08</option>
																		<option>09</option>
																		<option selected>10</option>
																		<option>11</option>
																		<option>12</option>
																		<option>13</option>
																		<option>14</option>
																		<option>15</option>
																		<option>16</option>
																		<option>17</option>
																		<option>18</option>
																		<option>19</option>
																		<option>20</option>
																		<option>21</option>
																		<option>22</option>
																		<option>23</option>
																		<option>24</option>
																		<option>25</option>
																		<option>26</option>
																		<option>27</option>
																		<option>28</option>
																		<option>29</option>
																		<option>30</option>
																		<option>31</option>
																	</select>
																</div>
																<div class="col-12 col-lg-4">
																	<select class="form-control">
																		<option>1990</option>
																		<option>1991</option>
																		<option>1992</option>
																		<option selected>1993</option>
																		<option>1994</option>
																	</select>
																</div> -->
																<!-- <div class="col-12">
																	<label class="form-label">Twitter</label>
																	<input type="text" class="form-control" value="https://twitter.com/anyukova">
																</div>
																<div class="col-12">
																	<label class="form-label">Linked In</label>
																	<input type="text" class="form-control" value="https://www.linkedin.com/anyukova/">
																</div>
																<div class="col-12">
																	<label class="form-label">Facebook</label>
																	<input type="text" class="form-control" value="https://www.facebook.com/anyukova">
																</div>
																<div class="col-12">
																	<label class="form-label">Dribbble</label>
																	<input type="text" class="form-control" value="https://dribbble.com/anyukova/">
																</div> -->
																<!-- <div class="col-12">
																	<label class="form-label">Slogan</label>
																    <input type="text" class="form-control" value="Land Acquisition Specialist">
																</div>
																<div class="col-12 col-lg-6">
																	<div class="card shadow-none border mb-3 mb-md-0">
																		<div class="card-body">
																			<div class="d-flex align-items-center">
																				<img src="assets/images/icons/credit-card-visa.png" width="50" alt="">
																				<div class="ms-2">
																					<h6 class="mb-0">Visa...8759</h6>
																					<p class="mb-0">Expires 06/21</p>
																				</div>
																			</div>
																		</div>
																		<div class="card-footer bg-transparent text-right"> <a href="javascript:;" class="text-danger">REMOVE</a>
																		</div>
																	</div>
																</div>
																<div class="col-12 col-lg-6">
																	<div class="card shadow-none border mb-0">
																		<div class="card-body">
																			<div class="d-flex align-items-center">
																				<img src="assets/images/icons/mastercard-2.png" width="50" alt="">
																				<div class="ms-2">
																					<h6 class="mb-0">Master...8314</h6>
																					<p class="mb-0">Expires 08/24</p>
																				</div>
																			</div>
																		</div>
																		<div class="card-footer bg-transparent text-right"> <a href="javascript:;" class="text-danger">REMOVE</a>
																		</div>
																	</div>
																</div> -->
															</form>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- <div class="tab-pane fade" id="Experience">
										<div class="card shadow-none border mb-0 radius-15">
											<div class="card-body">
												<div class="d-sm-flex align-items-center mb-3">
													<h4 class="mb-0">Job Experience</h4>
													<p class="mb-0 ms-sm-3 text-muted">3 Job History</p> <a href="javascript:;" class="btn btn-primary ms-auto radius-10"><i class='bx bx-plus'></i> Add More</a>
												</div>
												<div class="d-flex"> <i class='bx bxl-dribbble media-icons bg-dribbble'></i>
													<div class="ms-3">
														<div class="row align-items-center">
															<div class="col-lg-4">
																<h5 class="mb-0">Graphic Designer</h5>
																<p class="mb-0">Dribbble Inc</p>
															</div>
															<div class="col-lg-4">
																<h5 class="text-muted mb-0"><i class='bx bx-time'></i> Feb-2017-Dec-2017</h5>
															</div>
															<div class="col-lg-4">
																<h5 class="text-muted mb-0"><i class='bx bxs-map'></i> New York, USA</h5>
															</div>
														</div>
														<p class="mt-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing.</p>
														<h6>Media Files(2)</h6>
														<div class="row g-3">
															<div class="col-12 col-lg-3">
																<img src="assets/images/gallery/35.jpg" class="img-thumbnail" alt="">
															</div>
															<div class="col-12 col-lg-3">
																<img src="assets/images/gallery/36.jpg" class="img-thumbnail" alt="">
															</div>
															<div class="col-12 col-lg-3">
																<img src="assets/images/gallery/37.jpg" class="img-thumbnail" alt="">
															</div>
															<div class="col-12 col-lg-3">
																<img src="assets/images/gallery/38.jpg" class="img-thumbnail" alt="">
															</div>
														</div>
														<hr/>
													</div>
												</div>
												<div class="d-flex"> <i class='bx bxs-diamond media-icons bg-warning'></i>
													<div class="ms-3">
														<div class="row align-items-center">
															<div class="col-lg-4">
																<h5 class="mb-0">Lead Designer</h5>
																<p class="mb-0">Sketch App</p>
															</div>
															<div class="col-lg-4">
																<h5 class="text-muted mb-0"><i class='bx bx-time'></i> Apr-2011-Sep-2013</h5>
															</div>
															<div class="col-lg-4">
																<h5 class="text-muted mb-0"><i class='bx bxs-map'></i> Sydney, Australia</h5>
															</div>
														</div>
														<p class="mt-2">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="tab-pane fade" id="Biography">
										<div class="row">
											<div class="col-lg-4">
												<div class="card shadow-none border mb-0">
													<div class="card-body">
														<h5 class="">Websites</h5>
													</div>
													<ul class="list-group list-group-flush">
														<li class="list-group-item">
															<p class="mb-0"><i class='bx bx-globe me-1'></i> Website: <a href="javascript:;">svetlananyukova.com</a>
															</p>
														</li>
														<li class="list-group-item">
															<p class="mb-0"><i class='bx bxl-blogger me-1'></i> Blog: <a href="javascript:;">blog.svetlananyukova.com</a>
															</p>
														</li>
														<li class="list-group-item">
															<p class="mb-0"><i class='bx bx-images me-1'></i> Portfolio: <a href="javascript:;">svetlananyukova.com/portfolio</a>
															</p>
														</li>
													</ul>
												</div>
											</div>
											<div class="col-lg-8">
												<div class="card shadow-none border mb-0 radius-15">
													<div class="card-body">
														<h5 class="mb-3">About</h5>
														<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.</p>
														<hr>
														<h5 class="mb-3">Skills</h5>
														<div class="chip">UI Development <span class="closebtn" onclick="this.parentElement.style.display='none'">×</span>
														</div>
														<div class="chip">android <span class="closebtn" onclick="this.parentElement.style.display='none'">×</span>
														</div>
														<div class="chip">iOS <span class="closebtn" onclick="this.parentElement.style.display='none'">×</span>
														</div>
														<div class="chip">python <span class="closebtn" onclick="this.parentElement.style.display='none'">×</span>
														</div>
														<div class="chip">javascript <span class="closebtn" onclick="this.parentElement.style.display='none'">×</span>
														</div>
														<div class="chip">sketch <span class="closebtn" onclick="this.parentElement.style.display='none'">×</span>
														</div>
														<div class="chip">photoshop <span class="closebtn" onclick="this.parentElement.style.display='none'">×</span>
														</div>
														<div class="chip">Html5 <span class="closebtn" onclick="this.parentElement.style.display='none'">×</span>
														</div>
														<div class="chip">bootstrap4 <span class="closebtn" onclick="this.parentElement.style.display='none'">×</span>
														</div>
														<div class="chip">jQuery <span class="closebtn" onclick="this.parentElement.style.display='none'">×</span>
														</div>
														<div class="chip">php Development <span class="closebtn" onclick="this.parentElement.style.display='none'">×</span>
														</div>
														<div class="chip">ms excel <span class="closebtn" onclick="this.parentElement.style.display='none'">×</span>
														</div>
														<div class="chip">programming <span class="closebtn" onclick="this.parentElement.style.display='none'">×</span>
														</div>
														<h5 class="mb-3">Language</h5>
														<hr>
														<ul class="list-inline mb-0">
															<li class="list-inline-item"><i class="flag-icon flag-icon-um me-2"></i><span>English</span>
															</li>
															<li class="list-inline-item"><i class="flag-icon flag-icon-fr me-2"></i><span>French</span>
															</li>
															<li class="list-inline-item"><i class="flag-icon flag-icon-de me-2"></i><span>German</span>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div> -->
									
								</div>
							</div>
						</div>
					</div>
				</div>
				
			</div>
			<!--end page-content-wrapper-->
		</div>
		<!--end page-wrapper-->
		<!--start overlay-->
		<div class="overlay toggle-btn-mobile"></div>
		<!--end overlay-->
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
		
	</div>
	<!-- end wrapper -->
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
	<script src="{{ asset ('admin/assets/js/bootstrap.bundle.min.js')}}"></script>
	
	<!--plugins-->
	<script src="{{ asset ('admin/assets/js/jquery.min.js')}}"></script>
	<script src="{{ asset ('admin/assets/plugins/simplebar/js/simplebar.min.js')}}"></script>
	<script src="{{ asset ('admin/assets/plugins/metismenu/js/metisMenu.min.js')}}"></script>
	<script src="{{ asset ('admin/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
	<!-- App JS -->
	<script src="{{ asset ('admin/assets/js/app.js')}}"></script>
</body>


<!-- Mirrored from codervent.com/syndash/demo/vertical/user-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Nov 2022 01:46:07 GMT -->
</html>

@endsection
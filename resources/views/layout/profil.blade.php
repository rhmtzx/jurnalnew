@extends('layout.main')
@section('content')
<!DOCTYPE html>
<html>


<!-- Mirrored from wrappixel.com/demos/admin-templates/materialart/html/ltr/page-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 22 Jan 2023 14:20:42 GMT -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/png" sizes="16x16" href="{{asset('material/wrappixel.com/demos/admin-templates/materialart/assets/images/favicon.png')}}">
	<title>Materialart Admin Template</title>
	<link href="{{asset('material/wrappixel.com/demos/admin-templates/materialart/dist/css/style.css')}}" rel="stylesheet">
	<!-- This page CSS -->
	<!-- This page CSS -->
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
	<div class="main-wrapper" id="main-wrapper">
		<!-- ============================================================== -->
		<!-- Preloader - style you can find in spinners.css -->
		<!-- ============================================================== -->
		<div class="preloader">
			<div class="loader">
				<div class="loader__figure"></div>
				<p class="loader__label">Material Admin</p>
			</div>
		</div>
		<!-- ============================================================== -->
		<!-- Preloader - style you can find in spinners.css -->
		<!-- ============================================================== -->
		
		<!-- ============================================================== -->
		<!-- Sidebar scss in sidebar.scss -->
		<!-- ============================================================== -->
		
		<!-- ============================================================== -->
		<!-- Sidebar scss in sidebar.scss -->
		<!-- ============================================================== -->
		<!-- ============================================================== -->
		<!-- Page wrapper scss in scafholding.scss -->
		<!-- ============================================================== -->
		
		<!-- ============================================================== -->
		<!-- Title and breadcrumb -->
		<!-- ============================================================== -->
		<div class="page-titles">
			<div class="d-flex align-items-center">
				<h5 class="font-medium m-b-0">Profile</h5>
				<div class="custom-breadcrumb ml-auto">
					<a href="#!" class="breadcrumb">Home</a>
					<a href="#!" class="breadcrumb">Profile</a>
				</div>
			</div>
		</div>
		<!-- ============================================================== -->
		<!-- Container fluid scss in scafholding.scss -->
		<!-- ============================================================== -->
		<div class="container-fluid">
			<div class="row">
				<div class="col s12 m4">
					<div class="card">
						<div class="card-content">
							<div class="center-align m-t-30"> <img src="{{asset('material/wrappixel.com/demos/admin-templates/materialart/assets/images/users/5.jpg')}}" class="circle" width="150" />
								<h4 class="card-title m-t-10"><em>{{ Auth::user()->name }}</em></h4>
								<h6 class="card-subtitle"><em>{{ Auth::user()->role }}</em></h6>
								<div class="center-align">
									<div>
                                            <!-- <a href="javascript:void(0)" class="m-r-40"><i class="icon-people"></i> <font class="font-medium">254</font></a>
                                            	<a href="javascript:void(0)"><i class="icon-picture"></i> <font class="font-medium">54</font></a> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="card-content">
                                	<big>Name</big>
                                	<h6>{{ Auth::user()->name }}</h6>
                                	<br>
                                	<big>Email</big>
                                	<h6>{{ Auth::user()->email }}</h6>
                                	<br>
                                	<big>Address</big>
                                	<h6>{{ Auth::user()->name }}</h6>
                                <!-- <div class="map-box m-t-20">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d470029.1604841957!2d72.29955005258641!3d23.019996818380896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e848aba5bd449%3A0x4fcedd11614f6516!2sAhmedabad%2C+Gujarat!5e0!3m2!1sen!2sin!4v1493204785508" width="100%" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
                                </div> -->
                                <!-- <small class="db m-t-20">Social Profile</small>
                                <a href="javascript:void(0)" class="btn-floating indigo darken-2 m-t-10"><i class="fab fa-facebook"></i></a>
                                <a href="javascript:void(0)" class="btn-floating blue darken-1 m-t-10"><i class="fab fa-twitter"></i></a>
                                <a href="javascript:void(0)" class="btn-floating deep-orange m-t-10"><i class="fab fa-youtube"></i></a> -->
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m8">
                    	<div class="card">
                    		<div class="row">
                    			<div class="col s12">
                    				<ul class="tabs">
                    					<!-- <li class="tab col s3"><a  href="#timeline">Timeline</a></li> -->
                    					<li class="tab col s12"><a class="active" href="#profile">Profile</a></li>
                    					<!-- <li class="tab col s3"><a href="#settings">Settings</a></li> -->
                    				</ul>
                    			</div>
                                <!-- <div id="timeline" class="col s12">
                                    <div class="card-content">
                                        <div class="profiletimeline">
                                            <div class="sl-item">
                                                <div class="sl-left"> <img src="{{asset('material/wrappixel.com/demos/admin-templates/materialart/assets/images/users/1.jpg')}}" alt="user" class="circle" /> </div>
                                                <div class="sl-right">
                                                    <div><a href="javascript:void(0)" class="">{{ Auth::user()->name }}</a> <span class="sl-date">5 minutes ago</span>
                                                        <p>assign a new task <a href="javascript:void(0)">{{ Auth::user()->email }}</a></p>
                                                        <div class="row">
                                                            <div class="col l3 m6 m-b-20"><img src="{{asset('material/wrappixel.com/demos/admin-templates/materialart/assets/images/big/img1.jpg')}}" class="responsive-img radius" /></div>
                                                            <div class="col l3 m6 m-b-20"><img src="{{asset('material/wrappixel.com/demos/admin-templates/materialart/assets/images/big/img2.jpg')}}" class="responsive-img radius" /></div>
                                                            <div class="col l3 m6 m-b-20"><img src="{{asset('material/wrappixel.com/demos/admin-templates/materialart/assets/images/big/img3.jpg')}}" class="responsive-img radius" /></div>
                                                            <div class="col l3 m6 m-b-20"><img src="{{asset('material/wrappixel.com/demos/admin-templates/materialart/assets/images/big/img4.jpg')}}" class="responsive-img radius" /></div>
                                                        </div>
                                                        <div class="like-comm"> <a href="javascript:void(0)" class="m-r-10">2 comment</a> <a href="javascript:void(0)" class="m-r-10"><i class="fa fa-heart text-danger"></i> 5 Love</a> </div>
                                                    </div>
                                                </div>
                                            </div>                                            <hr>
                                            <div class="sl-item">
                                                <div class="sl-left"> <img src="{{asset('material/wrappixel.com/demos/admin-templates/materialart/assets/images/users/2.jpg')}}" alt="user" class="circle" /> </div>
                                                <div class="sl-right">
                                                    <div> <a href="javascript:void(0)" class="">John Doe</a> <span class="sl-date">5 minutes ago</span>
                                                        <div class="row m-t-30">
                                                            <div class="col s3">
                                                                <img src="{{asset('material/wrappixel.com/demos/admin-templates/materialart/assets/images/big/img1.jpg')}}" alt="user" class="responsive-img radius" />
                                                            </div>
                                                            <div class="col s9">
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam.</p>
                                                                <a href="javascript:void(0)" class="waves-effect waves-light btn"> Design weblayout</a>
                                                            </div>
                                                        </div>
                                                        <div class="like-comm m-t-20"> <a href="javascript:void(0)" class="m-r-10">2 comment</a> <a href="javascript:void(0)" class="m-r-10"><i class="fa fa-heart red-text"></i> 5 Love</a> </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="sl-item">
                                                <div class="sl-left"> <img src="{{asset('material/wrappixel.com/demos/admin-templates/materialart/assets/images/users/3.jpg')}}" alt="user" class="circle" /> </div>
                                                <div class="sl-right">
                                                    <div><a href="javascript:void(0)" class="">John Doe</a> <span class="sl-date">5 minutes ago</span>
                                                        <p class="m-t-10"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper </p>
                                                    </div>
                                                    <div class="like-comm m-t-20"> <a href="javascript:void(0)" class="m-r-10">2 comment</a> <a href="javascript:void(0)" class="m-r-10"><i class="fa fa-heart text-danger"></i> 5 Love</a> </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="sl-item">
                                                <div class="sl-left"> <img src="{{asset('material/wrappixel.com/demos/admin-templates/materialart/assets/images/users/4.jpg')}}" alt="user" class="circle" /> </div>
                                                <div class="sl-right">
                                                    <div><a href="javascript:void(0)" class="">John Doe</a> <span class="sl-date">5 minutes ago</span>
                                                        <blockquote class="m-t-10">
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                                                        </blockquote>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                                <div id="profile" class="col s12">
                                	<div class="card-content">
                                		<form>
                                			<div class="row">
                                				<div class="input-field col s12">
                                					<input id="name" type="text" value="{{ Auth::user()->name }}">
                                					<label for="name"><em>Nama</em></label>
                                				</div>
                                			</div>
                                			<div class="row">
                                				<div class="input-field col s12">
                                					<input id="email" type="email" value="{{ Auth::user()->email }}">
                                					<label for="email"><em>Email</em></label>
                                				</div>
                                			</div>
                                			<div class="row">
                                				<div class="input-field col s12">
                                					<input id="password" type="password" value="{{ Auth::user()->password }}">
                                					<label for="password"><em>Password</em></label>
                                				</div>
                                			</div>
                                			<div class="row">
                                				<div class="input-field col s12">
                                					<input id="number" type="text" value="{{ Auth::user()->name }}">
                                					<label for="number"><em>No Telepon</em></label>
                                				</div>
                                			</div>
                                			<div class="row">
                                				<div class="input-field col s12">
                                					<textarea id="message" class="materialize-textarea">Jl. Veteran No.10</textarea>
                                					<label for="message"><em>Alamat</em></label>
                                				</div>
                                			</div>
                                			<div class="row">
                                				<div class="input-field col s12">
                                					<textarea id="message" class="materialize-textarea">Hi, I am Jon Doe</textarea>
                                					<label for="message"><em>Message</em></label>
                                				</div>
                                			</div>
                                			<form class="m-t-40">
                                				<div class="file-field input-field">
                                					<div class="btn blue darken-1">
                                						<span>File</span>
                                						<input type="file" multiple>
                                					</div>
                                					<div class="file-path-wrapper">
                                						<input class="file-path validate" type="text" placeholder="Upload one or more files">
                                					</div>
                                				</div>
                                			</form>
                                			<div class="row">
                                				<div class="input-field col s12">
                                					<button class="btn teal waves-effect waves-light" type="submit" name="action">Update Profile</button>
                                				</div>
                                			</div>
                                		</form>
                                	</div>
                                </div>
                                <div id="settings" class="col s12">
                                	
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- ============================================================== -->
                <!-- Container fluid scss in scafholding.scss -->
                <!-- ============================================================== -->
                <footer class="center-align m-b-30">All Rights Reserved by Materialart. Designed and Developed by <a href="https://wrappixel.com/">WrapPixel</a>.</footer>
            </div>
            <!-- ============================================================== -->
            <!-- Page wrapper scss in scafholding.scss -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Right Sidebar -->
            <!-- ============================================================== -->
            <a href="#" data-target="right-slide-out" class="sidenav-trigger right-side-toggle btn-floating btn-large waves-effect waves-light red"><i class="material-icons">settings</i></a>
            
            <div class="chat-windows"></div>
            <!-- ============================================================== -->
            <!-- Right Sidebar -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- All Required js -->
        <!-- ============================================================== -->
        <script src="{{asset('material/wrappixel.com/demos/admin-templates/materialart/assets/libs/jquery/dist/jquery.min.js')}}"></script>
        <script src="{{asset('material/wrappixel.com/demos/admin-templates/materialart/dist/js/materialize.min.js')}}"></script>
        <script src="{{asset('material/wrappixel.com/demos/admin-templates/materialart/assets/libs/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js')}}"></script>
        <!-- ============================================================== -->
        <!-- Apps -->
        <!-- ============================================================== -->
        <script src="{{asset('material/wrappixel.com/demos/admin-templates/materialart/dist/js/app.js')}}"></script>
        <script src="{{asset('material/wrappixel.com/demos/admin-templates/materialart/dist/js/app.init.js')}}"></script>
        <script src="{{asset('material/wrappixel.com/demos/admin-templates/materialart/dist/js/app-style-switcher.js')}}"></script>
        <!-- ============================================================== -->
        <!-- Custom js -->
        <!-- ============================================================== -->
        <script src="{{asset('material/wrappixel.com/demos/admin-templates/materialart/dist/js/custom.min.js')}}"></script>
        <!-- ============================================================== -->
        <!-- This page plugin js -->
        <!-- ============================================================== -->
    </body>


    <!-- Mirrored from wrappixel.com/demos/admin-templates/materialart/html/ltr/page-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 22 Jan 2023 14:20:42 GMT -->
    </html>
    @endsection
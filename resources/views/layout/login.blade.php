<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">


<!-- Mirrored from themesbrand.com/velzon/html/default/auth-signin-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Feb 2023 07:41:47 GMT -->
<head>

    <meta charset="utf-8" />
    <title>J - On | Journal Online</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('velzon/themesbrand.com/velzon/html/default/assets/images/favicon.ico')}}">

    <!-- Layout config Js -->
    <script src="{{asset('velzon/themesbrand.com/velzon/html/default/assets/js/layout.js')}}"></script>
    <!-- Bootstrap Css -->
    <link href="{{asset('velzon/themesbrand.com/velzon/html/default/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{asset('velzon/themesbrand.com/velzon/html/default/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{asset('velzon/themesbrand.com/velzon/html/default/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{asset('velzon/themesbrand.com/velzon/html/default/assets/css/custom.min.css')}}" rel="stylesheet" type="text/css" />

</head>

<body>

    <div class="auth-page-wrapper pt-5">
        <!-- auth page bg -->
        <div class="auth-one-bg-position auth-one-bg" id="auth-particles">
            <div class="bg-overlay"></div>

            <div class="shape">
                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1440 120">
                    <path d="M 0,36 C 144,53.6 432,123.2 720,124 C 1008,124.8 1296,56.8 1440,40L1440 140L0 140z"></path>
                </svg>
            </div>
        </div>

        <!-- auth page content -->
        <div class="auth-page-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center mt-sm-5 mb-4 text-white-50">
                            <div>
                                <a href="index.html" class="d-inline-block auth-logo">
                                    <img src="{{asset('velzon/themesbrand.com/velzon/html/default/assets/images/logo-light.png')}}" alt="" height="20">
                                </a>
                            </div>
                            <p class="mt-3 fs-15 fw-medium">J - On | Journal Online</p>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card mt-4">

                            <div class="card-body p-4">
                                <div class="text-center mt-2">
                                    <h5 class="text-primary">Selamat Datang !</h5>
                                    <p class="text-muted">Login Untuk Masuk.</p>
                                </div>
                                <div class="p-2 mt-4">
                                    <form action="/loginproses" method="POST">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Masukkan Email</label>
                                            <input type="text" class="form-control" name="email" id="email" placeholder="Masukkan Email">
                                        </div>

                                        <div class="mb-3">

                                            <label class="form-label" for="password-input">Masukkan Password</label>
                                            <div class="position-relative auth-pass-inputgroup mb-3">
                                                <input type="password" class="form-control pe-5 password-input" placeholder="Masukkan Password" name="password" id="password">
                                                <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                            </div>
                                            <div class="float-end">
                                                <a href="auth-pass-reset-basic.html" class="text-muted">Forgot password?</a>
                                            </div>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="auth-remember-check">
                                            <label class="form-check-label" for="auth-remember-check">Remember Me</label>

                                        </div>
                                        <div class="mt-4">
                                            <button class="btn btn-success w-100" type="submit">Login</button>
                                        </div>
                                    <br>

                                        <!-- <div class="mt-4 text-center">
                                            <div class="signin-other-title">
                                                <h5 class="fs-13 mb-4 title">Sign In with</h5>
                                            </div>
                                            <div>
                                                <button type="button" class="btn btn-primary btn-icon waves-effect waves-light"><i class="ri-facebook-fill fs-16"></i></button>
                                                <button type="button" class="btn btn-danger btn-icon waves-effect waves-light"><i class="ri-google-fill fs-16"></i></button>
                                                <button type="button" class="btn btn-dark btn-icon waves-effect waves-light"><i class="ri-github-fill fs-16"></i></button>
                                                <button type="button" class="btn btn-info btn-icon waves-effect waves-light"><i class="ri-twitter-fill fs-16"></i></button>
                                            </div>
                                        </div> -->
                                    </form>
                                </div>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->
                        <div class="card mt-1">
                            <div class="mt-4 text-center">
                            <p class="mb-1">Tidak Punya Akun ?  Register Disini </p>
                        </div>
                        <br>
                            <div style="display : flex">
                                        <div class="mt-1 m-auto">
                                            <a href="/registerdudi" class="btn btn-info w-33" type="submit">Register Dudi</a>
                                        </div>
                                        <div class="mt-1 m-auto">
                                            <a href="/registersiswa" class="btn btn-info w-33" type="submit">Register Siswa</a>
                                        </div>
                                        <div class="mt-1 m-auto">
                                            <a href="/registerguru" class="btn btn-info w-33" type="submit">Register Guru </a>
                                        </div>
                                    </div>
                            <div class="card-body p-4">


                            </div>
                            <!-- end card body -->
                        </div>


                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end auth page content -->

        <!-- footer -->
       <!--  <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <p class="mb-0 text-muted">&copy;
                                <script>document.write(new Date().getFullYear())</script> Velzon. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer> -->
        <!-- end Footer -->
    </div>
    <!-- end auth-page-wrapper -->

    <!-- JAVASCRIPT -->
    <script src="{{asset('velzon/themesbrand.com/velzon/html/default/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('velzon/themesbrand.com/velzon/html/default/assets/libs/simplebar/simplebar.min.js')}}"></script>
    <script src="{{asset('velzon/themesbrand.com/velzon/html/default/assets/libs/node-waves/waves.min.js')}}"></script>
    <script src="{{asset('velzon/themesbrand.com/velzon/html/default/assets/libs/feather-icons/feather.min.js')}}"></script>
    <script src="{{asset('velzon/themesbrand.com/velzon/html/default/assets/js/pages/plugins/lord-icon-2.1.0.js')}}"></script>
    <script src="{{asset('velzon/themesbrand.com/velzon/html/default/assets/js/plugins.js')}}"></script>

    <!-- particles js -->
    <script src="{{asset('velzon/themesbrand.com/velzon/html/default/assets/libs/particles.js/particles.js')}}"></script>
    <!-- particles app js -->
    <script src="{{asset('velzon/themesbrand.com/velzon/html/default/assets/js/pages/particles.app.js')}}"></script>
    <!-- password-addon init -->
    <script src="{{asset('velzon/themesbrand.com/velzon/html/default/assets/js/pages/password-addon.init.js')}}"></script>
</body>


<!-- Mirrored from themesbrand.com/velzon/html/default/auth-signin-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Feb 2023 07:41:47 GMT -->
</html>

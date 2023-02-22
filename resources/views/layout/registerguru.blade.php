<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">


<!-- Mirrored from themesbrand.com/velzon/html/default/auth-signup-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Feb 2023 07:41:47 GMT -->
<head>

    <meta charset="utf-8" />
    <title>J On | Register Guru</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('velzon/themesbrand.com/velzon/html/default/assets/images/2.png')}}">

    <!-- Layout config Js -->
    <script src="assets/js/layout.js"></script>
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
                                <a href="/registerguru" class="d-inline-block auth-logo">
                                    <img src="{{asset('velzon/themesbrand.com/velzon/html/default/assets/images/1.png')}}" alt="" height="100" width="250">
                                </a>
                            </div>
                            <p class="mt-3 fs-15 fw-medium">J On | Journal Online</p>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card mt-4">

                            <div class="card-body p-4">
                                <div class="text-center mt-2">
                                    <h5 class="text-primary">DAFTAR AKUN</h5>
                                    <p class="text-muted">Daftar Akun Guru</p>
                                </div>
                                <div class="p-2 mt-4">
                                    <form class="col s12" action="/registeruserguru" method="POST">
                                        @csrf
                                        <!-- email -->
                                        <div class="mb-3">
                                            <label for="nip" class="form-label"><strong>NIP Guru</strong><span class="text-danger">*</span></label>
                                            <input type="number" class="form-control" name="nip" id="nip" placeholder="Masukkan NIP Guru">
                                            <div class="invalid-feedback">
                                                Please enter email
                                            </div>
                                        @error('nip')
                                                <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label for="name" class="form-label"><strong>Nama Guru</strong><span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="name" id="name" placeholder="Masukkan Nama Guru">
                                            <div class="invalid-feedback">
                                                Please enter email
                                            </div>
                                        @error('name')
                                                <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                        </div>

                                         <div class="mb-3">
                                            <label for="alamat" class="form-label"><strong>Alamat Guru</strong><span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Masukkan Alamat Guru">
                                            <div class="invalid-feedback">
                                                Please enter email
                                            </div>
                                        @error('alamat')
                                                <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label for="notlpn" class="form-label"><strong>No Telepon Guru</strong><span class="text-danger">*</span></label>
                                            <input type="number" class="form-control" name="notlpn" id="notlpn" placeholder="Masukkan No Telepon Guru">
                                            <div class="invalid-feedback">
                                                Please enter email
                                            </div>
                                        @error('notlpn')
                                                <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label for="email" class="form-label"><strong>Masukkan Email</strong><span class="text-danger">*</span></label>
                                            <input type="email" class="form-control" name="email" id="email" placeholder="Masukkan Email Guru">
                                            <div class="invalid-feedback">
                                                Please enter email
                                            </div>
                                        @error('email')
                                                <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="password-input"><strong>Buat Password</strong></label>
                                            <div class="position-relative auth-pass-inputgroup">
                                                <input type="password" name="password" class="form-control pe-5 password-input" onpaste="return false" placeholder="Buat Password" id="password" aria-describedby="passwordInput">
                                                <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" id="password"><i class="ri-eye-fill align-middle"></i></button>
                                                <div class="invalid-feedback">
                                                    Please enter password
                                                </div>
                                            </div>
                                        @error('password')
                                                <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="password-input"><strong>Konfirmasi Password</strong></label>
                                            <div class="position-relative auth-pass-inputgroup">
                                                <input type="password" name="password_confirmation" class="form-control pe-5 password-input" onpaste="return false" placeholder="Buat Password" id="password" aria-describedby="passwordInput">
                                                <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" id="password"><i class="ri-eye-fill align-middle"></i></button>
                                                <div class="invalid-feedback">
                                                    Please enter password
                                                </div>
                                                @error('password')
                                                <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                            </div>

                                        <br><div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label"><strong>Masukkan Foto Guru <span class="text-danger">*</span></strong></label>
                                                <br>
                                                <input type="file" name="foto" class="form-control" >
                                        @error('foto')
                                                <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                        </div>

                                        <div class="mt-4">
                                            <button class="btn btn-success w-100" type="submit">Daftar</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->

                        <div class="mt-4 text-center">
                            <p class="mb-0">Sudah Punya Akun Guru ? <a href="/login" class="fw-semibold text-primary text-decoration-underline"> Login Disini </a> </p>
                        </div>

                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end auth page content -->

        <!-- footer -->
        {{-- <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <p class="mb-0 text-muted">&copy;
                                <script>document.write(new Date().getFullYear())</script> J | On. Crafted with by RQTeams

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer> --}}
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
    <!-- validation init -->
    <script src="{{asset('velzon/themesbrand.com/velzon/html/default/assets/js/pages/form-validation.init.js')}}"></script>
    <!-- password create init -->
    <script src="{{asset('velzon/themesbrand.com/velzon/html/default/assets/js/pages/passowrd-create.init.js')}}"></script>
</body>


<!-- Mirrored from themesbrand.com/velzon/html/default/auth-signup-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Feb 2023 07:41:48 GMT -->
</html>

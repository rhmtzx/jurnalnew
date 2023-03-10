<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">

<head>
    <meta charset="utf-8" />
    <title>J - On | Login Jurnal Online</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <link rel="shortcut icon" href="{{asset('velzon/themesbrand.com/velzon/html/default/assets/images/2.png')}}">
    <script src="{{asset('velzon/themesbrand.com/velzon/html/default/assets/js/layout.js')}}"></script>
    <link href="{{asset('velzon/themesbrand.com/velzon/html/default/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('velzon/themesbrand.com/velzon/html/default/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('velzon/themesbrand.com/velzon/html/default/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('velzon/themesbrand.com/velzon/html/default/assets/css/custom.min.css')}}" rel="stylesheet" type="text/css" />
</head>

<body>

    <div class="auth-page-wrapper pt-5">
        <div class="auth-one-bg-position auth-one-bg" id="auth-particles">
            <div class="bg-overlay"></div>
            <div class="shape">
                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1440 120">
                    <path d="M 0,36 C 144,53.6 432,123.2 720,124 C 1008,124.8 1296,56.8 1440,40L1440 140L0 140z"></path>
                </svg>
            </div>
        </div>
        <div class="auth-page-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center mt-sm-5 mb-4 text-white-50">
                            <div>
                                <a href="index.html" class="d-inline-block auth-logo">
                                    <img src="{{asset('velzon/themesbrand.com/velzon/html/default/assets/images/1.png')}}" alt="" height="100" width="250">
                                </a>
                            </div>
                            <p class="mt-3 fs-15 fw-medium">J - On | Jurnal Online</p>
                        </div>
                    </div>
                </div>

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
                                        @error('email')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                        @if (session('errore'))
                                            <div class="text-danger"> {{ session('errore') }} </div>
                                        @endif
                                        </div>


                                        <div class="mb-3">
                                            <div class="float-end">
                                            </div>
                                            <label class="form-label" for="password-input">Masukkan Password</label>
                                            <div class="position-relative auth-pass-inputgroup mb-3">
                                                <input type="password" class="form-control pe-5 password-input" placeholder="Masukkan Password" name="password" id="password">
                                                <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                            </div>
                                            @error('password')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror

                                            @if (session('error'))
                                            <div class="text-danger"> {{ session('error') }} </div>
                                            @endif
                                        </div>
                                        <div style="margin-left: 280px">
                                        <a href="/forgot-password" class="text-muted">Lupa Password?</a>
                                    </div>
                                        <div class="mt-4">
                                            <button class="btn btn-primary w-100" type="submit">Login</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="card mt-1">
                            <div class="mt-4 text-center">
                            <p class="mb-1">Tidak Punya Akun ?  Register Disini </p>
                        </div>
                        <br>
                            <div style="display : flex">
                                        <div class="mt-1 m-auto">
                                            <a href="/registerdudi" class="btn btn-primary w-33" type="submit">Daftar Dudi</a>
                                        </div>
                                        <div class="mt-1 m-auto">
                                            <a href="/registersiswa" class="btn btn-primary w-33" type="submit">Daftar Siswa</a>
                                        </div>
                                        <div class="mt-1 m-auto">
                                            <a href="/registerguru" class="btn btn-primary w-33" type="submit">Daftar Guru </a>
                                        </div>
                                    </div>
                            <div class="card-body p-4">
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
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

</html>
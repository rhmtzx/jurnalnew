<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">


<!-- Mirrored from themesbrand.com/velzon/html/default/auth-signup-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Feb 2023 07:41:47 GMT -->
<head>

    <meta charset="utf-8" />
    <title>J - On | Register Siswa</title>
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
    <link href="https://cdn.jsdelivr.net/npm/tom-select@2.2.2/dist/css/tom-select.css" rel="stylesheet">

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
                                <a href="/registersiswa" class="d-inline-block auth-logo">
                                    <img src="{{asset('velzon/themesbrand.com/velzon/html/default/assets/images/1.png')}}" alt="" height="100" width="250">
                                </a>
                            </div>
                            <p class="mt-3 fs-15 fw-medium">J - On | Jurnal Online</p>
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
                                    <p class="text-muted">Daftar Akun Siswa</p>
                                </div>
                                <form class="col s12" action="/registerusersiswa" method="POST">
                                    @csrf
                                    <!-- email -->
                                    <div class="mb-3">
                                        <label for="nissiswa" class="form-label">NIS Siswa<span class="text-danger">*</span></label>
                                        <input type="number" class="form-control" name="nissiswa" id="nissiswa" placeholder="Masukkan Nis Siswa" required>
                                         @error('nissiswa')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="name" class="form-label">Nama Siswa <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Masukkan Nama Siswa" required>
                                        @error('name')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                    </div>

                                    <div class="col-lg-12">
                                        <label for="name" class="form-label">Kelas Jurusan Siswa <span class="text-danger">*</span></label>
                                        <select class="form-control js-example-basic-single" name="namajurusan" id="namajurusan" autocomplete="off">
                                            <option value="" selected disabled>- Pilih Jurusan Siswa -</option>
                                            @foreach($data as $hi)
                                            <option value="{{ $hi->id }}">{{ $hi->namajurusan }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <br>
                                    <div class="mb-3">
                                        <label for="alamatsiswa" class="form-label">Alamat Siswa <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="alamatsiswa" id="alamatsiswa" placeholder="Masukkan Alamat Siswa" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="notlpsiswa" class="form-label">No Telepon Siswa <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="notlpsiswa" id="notlpsiswa" placeholder="Masukkan No Telepon Siswa" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email Siswa <span class="text-danger">*</span></label>
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Masukkan Email Siswa" required>
                                    </div>
                                    <!-- pwd -->
                                    <div class="mb-3">
                                        <label class="form-label" for="password-input">Password</label>
                                        <div class="position-relative auth-pass-inputgroup">
                                            <input type="password" class="form-control pe-5 password-input" name="password" onpaste="return false" placeholder="Masukkan Password Baru" id="password-input" aria-describedby="passwordInput" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
                                            <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                        </div>
                                        <div id="passwordInput" class="form-text">Harus 8 Karakter</div>
                                    </div>
                                    <div id="password-contain" class="p-3 bg-light mb-2 rounded">
                                        <h5 class="fs-13">Kata Sandi Harus Berisi :</h5>
                                        <p id="pass-length" class="invalid fs-12 mb-2">Minimal <b>8 Karakter</b></p>
                                        <p id="pass-lower" class="invalid fs-12 mb-2">di <b>Huruf</b>Kecil (a-z)</p>
                                        <p id="pass-upper" class="invalid fs-12 mb-2">Minimal <b>Huruf</b> Kapital (A-Z)</p>
                                        <p id="pass-number" class="invalid fs-12 mb-0">Minimal <b>Angka</b> (0-9)</p>
                                    </div>
                                    @error('password')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
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
                                    <br>
                                    <div class="row m-b-40">
                                        <div class="mb-3">
                                            <button style="width: 100%;" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalgrid">
                                                Selanjutnya
                                            </button>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <!-- end card body -->
                    </div>
                    <!-- end card -->

                    <div class="mt-4 text-center">
                        <p class="mb-0">Sudah Punya Akun Siswa ? <a href="/login" class="fw-semibold text-primary text-decoration-underline"> Login Disini </a> </p>
                    </div>

                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
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
<!-- Grids in modals -->
<div class="modal fade" id="exampleModalgrid" tabindex="-1" aria-labelledby="exampleModalgridLabel" aria-modal="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalgridLabel">Kode</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                    <div class="row g-3">
                        <div class="col-xxl-12">
                            <div class="mb-3">
                                <label for="kd_guru" class="form-label">Masukkan Kode Guru Pembimbing <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="kd_guru" id="kd_guru" placeholder="Masukkan Kode Guru" required>
                            </div>
                            <label for=""><h6><em>Info : Pastikan kode benar!!</em></h6> </label>
                            <div class="mb-3">
                                <label for="kd_dudi" class="form-label">Masukkan Kode Dudi<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="kd_dudi" id="kd_dudi" placeholder="Masukkan Kode Dudi" required>
                            </div>
                            <label for=""><em><h6>Info : Pastikan kode benar!!</h6></em></label>
                        <div class="col-lg-12">
                            <div class="hstack gap-2 justify-content-end">
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Tutup</button>
                                <button type="submit" class="btn btn-primary">Daftar Siswa</button>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->
                </form>
            </div>
        </div>
    </div>
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
    {{-- modal --}}
    <script src="{{asset('velzon/themesbrand.com/velzon/html/default/assets/js/pages/modal.init.js')}}"></script>
    <script src="{{ asset('velzon/themesbrand.com/velzon/html/default/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('velzon/themesbrand.com/velzon/html/default/assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('velzon/themesbrand.com/velzon/html/default/assets/libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ asset('velzon/themesbrand.com/velzon/html/default/assets/libs/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('velzon/themesbrand.com/velzon/html/default/assets/js/pages/plugins/lord-icon-2.1.0.js') }}"></script>
    <script src="{{ asset('velzon/themesbrand.com/velzon/html/default/assets/js/plugins.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/tom-select@2.2.2/dist/js/tom-select.complete.min.js"></script>

    {{-- <!--jquery cdn-->
    <script src="{{ asset('velzon/themesbrand.com/velzon/html/default/code.jquery.com/jquery-3.6.0.min.js') }}" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!--select2 cdn-->
    <script src="{{ asset('velzon/themesbrand.com/velzon/html/default/cdn.jsdelivr.net/npm/select2%404.1.0-rc.0/dist/js/select2.min.js') }}"></script>

    <script src="{{ asset('velzon/themesbrand.com/velzon/html/default/assets/js/pages/select2.init.js') }}"></script> --}}
    <script>
        new TomSelect("#namajurusan",{
	// create: true,
	sortField: {
		field: "text",
		direction: "asc"
	}
});

    </script>
</body>


<!-- Mirrored from themesbrand.com/velzon/html/default/auth-signup-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Feb 2023 07:41:48 GMT -->
</html>

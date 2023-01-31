@extends('layout.main')
@section('content')
<!DOCTYPE html>
<html>


<!-- Mirrored from wrappixel.com/demos/admin-templates/materialart/html/ltr/ui-cards.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 22 Jan 2023 14:19:20 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png">
    <title>Materialart Admin Template</title>
    <link href="../../dist/css/style.css" rel="stylesheet">
    <!-- This page CSS -->
    <link href="../../assets/extra-libs/prism/prism.css" rel="stylesheet">
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
                <h5 class="font-medium m-b-0">Cards</h5>
                <div class="custom-breadcrumb ml-auto">
                    <a href="#!" class="breadcrumb">Home</a>
                    <a href="#!" class="breadcrumb">Cards</a>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Container fluid scss in scafholding.scss -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <div class="row">
                <div class="col s12">
                    <div class="card">
                        <div class="card-content">

                            <h4><em>TAMBAH PLOTINGAN</em></h4>
                            <hr>                                            
                            <form action="/insertdataplotingan" method="POST" enctype="multipart\form-data" >
                                <br>
                                @csrf
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label"><h5>Nama Guru</h5></label>
                                    <select class="form-control" name="namagurup" id="namagurup">
                                        <option value="" selected disabled>Pilih Guru</option>
                                        @foreach($guru as $hi)
                                        <option value="{{ $hi->id }}">{{ $hi->namaguru }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('namagurup')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                                <br>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label"><h5>Nama Siswa</h5></label>
                                    <select class="form-control" name="namasiswap" id="namasiswap">
                                        <option value="" selected disabled>Pilih Siswa</option>
                                        @foreach($siswa as $oke)
                                        <option value="{{ $oke->id }}">{{ $oke->namasiswa }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('namasiswap')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                                <br>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label"><h5>Nama Dudi</h5></label>
                                    <select class="form-control" name="namadudip" id="namadudip">
                                        <option value="" selected disabled>Pilih Dudi</option>
                                        @foreach($dudi as $titit)
                                        <option value="{{ $titit->id }}">{{ $titit->namadudi }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('namadudip')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                                <br>
                                <br>
                                <button type="submit" class="btn btn-primary">Submit Data</button>
                                <a href="/dataplotingan" class="btn btn-danger mb-10">Kembali</a>

                            </form>                                   

                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>
    <!-- ============================================================== -->
    <!-- Container fluid scss in scafholding.scss -->
    <!-- ============================================================== -->
    <footer class="center-align m-b-30">All Rights Reserved by Materialart. Designed and Developed by <a href="https://wrappixel.com/">WrapPixel</a>.</footer>

    <!-- ============================================================== -->
    <!-- Page wrapper scss in scafholding.scss -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Right Sidebar -->
    <!-- ============================================================== -->
    <a href="#" data-target="right-slide-out" class="sidenav-trigger right-side-toggle btn-floating btn-large waves-effect waves-light red"><i class="material-icons">settings</i></a>
    z
    <div class="chat-windows"></div>
    <!-- ============================================================== -->
    <!-- Right Sidebar -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- All Required js -->
<!-- ============================================================== -->
<script src="../../assets/libs/jquery/dist/jquery.min.js"></script>
<script src="../../dist/js/materialize.min.js"></script>
<script src="../../assets/libs/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js"></script>
<!-- ============================================================== -->
<!-- Apps -->
<!-- ============================================================== -->
<script src="../../dist/js/app.js"></script>
<script src="../../dist/js/app.init.js"></script>
<script src="../../dist/js/app-style-switcher.js"></script>
<!-- ============================================================== -->
<!-- Custom js -->
<!-- ============================================================== -->
<script src="../../dist/js/custom.min.js"></script>
<!-- ============================================================== -->
<!-- This page plugin js -->
<!-- ============================================================== -->
<script src="../../assets/extra-libs/prism/prism.js"></script>
</body>


<!-- Mirrored from wrappixel.com/demos/admin-templates/materialart/html/ltr/ui-cards.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 22 Jan 2023 14:19:21 GMT -->
</html>
@endsection
@extends('layout.main')
@section('content')
            <!-- ============================================================== -->
<body>
 <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col">

                            <div class="h-100">
                                <div class="row mb-3 pb-1">
                                    <div class="col-12">
                                        <div class="d-flex align-items-lg-center flex-lg-row flex-column">
                                            <div class="flex-grow-1">
                                                <h4 class="fs-16 mb-1">Selamat Datang, {{Auth::user()->name}}!</h4>
                                                <p class="text-muted mb-0">Selamat Datang Di Halaman Dashboard.</p>
                                            </div>
                                           <!--  -->
                                           <div class="col-auto">
                                            <a href="/" class="btn btn-soft-success">- - - {{Auth::user()->name}} - - -</a>
                                            </div>
                                        </div><!-- end card header -->
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->

                                <div class="row">
                                    <div class="col-xl-3 col-md-6">
                                        <!-- card -->
                                        <div class="card card-animate">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <p class="text-uppercase fw-medium text-muted text-truncate mb-0"> Jumlah Jurusan</p>
                                                    </div>
                                                    <div class="flex-shrink-0">
                                                        <h5 class="text-success fs-14 mb-0">
                                                            <i class="ri-arrow-right-up-line fs-13 align-middle"></i>
                                                        </h5>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-end justify-content-between mt-4">
                                                    <div>
                                                        <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span class="counter-value" data-target="{{$jurusan}}">{{$jurusan}}</span></h4>
                                                        <a href="#">Total Seluruh Jurusan</a>
                                                    </div>
                                                    <div class="avatar-sm flex-shrink-0">
                                                        <span class="avatar-title bg-soft-success rounded fs-3">
                                                            <i class="ri-contacts-book-2-fill text-success"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div><!-- end card body -->
                                        </div><!-- end card -->
                                    </div><!-- end col -->

                                    <div class="col-xl-3 col-md-6">
                                        <!-- card -->
                                        <div class="card card-animate">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-grow-1 overflow-hidden">
                                                     <p class="text-uppercase fw-medium text-muted text-truncate mb-0">Jumlah Siswa</p>
                                                    </div>
                                                    <div class="flex-shrink-0">
                                                        <h5 class="text-success fs-14 mb-0">
                                                            <i class="ri-arrow-right-up-line fs-13 align-middle"></i>
                                                        </h5>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-end justify-content-between mt-4">
                                                    <div>
                                                        <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span class="counter-value" data-target="{{$siswa}}">{{$siswa}}</span></h4>
                                                        <a href="#" >Total Seluruh Siswa</a>
                                                    </div>
                                                    <div class="avatar-sm flex-shrink-0">
                                                        <span class="avatar-title bg-soft-info rounded fs-3">
                                                            <i class="ri-contacts-book-2-fill text-success"></i>
                                                            
                                                        </span>
                                                    </div>
                                                </div>
                                            </div><!-- end card body -->
                                        </div><!-- end card -->
                                    </div><!-- end col -->

                                    <div class="col-xl-3 col-md-6">
                                        <!-- card -->
                                        <div class="card card-animate">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <p class="text-uppercase fw-medium text-muted text-truncate mb-0">Jumlah Guru</p>
                                                    </div>
                                                    <div class="flex-shrink-0">
                                                        <h5 class="text-success fs-14 mb-0">
                                                            <i class="ri-arrow-right-up-line fs-13 align-middle"></i>
                                                        </h5>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-end justify-content-between mt-4">
                                                    <div>
                                                        <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span class="counter-value" data-target="{{$guru}}">{{$guru}}</span></h4>
                                                        <a href="#">Total Seluruh Guru</a>
                                                    </div>
                                                    <div class="avatar-sm flex-shrink-0">
                                                        <span class="avatar-title bg-soft-info rounded fs-3">
                                                            <i class="ri-contacts-book-2-fill text-success"></i>
                                                            
                                                        </span>
                                                    </div>
                                                </div>
                                            </div><!-- end card body -->
                                        </div><!-- end card -->
                                    </div><!-- end col -->

                                    <div class="col-xl-3 col-md-6">
                                        <!-- card -->
                                        <div class="card card-animate">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <p class="text-uppercase fw-medium text-muted text-truncate mb-0">Jumlah Dudi</p>
                                                    </div>
                                                    <div class="flex-shrink-0">
                                                        <h5 class="text-success fs-14 mb-0">
                                                            <i class="ri-arrow-right-up-line fs-13 align-middle"></i>
                                                        </h5>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-end justify-content-between mt-4">
                                                    <div>
                                                        <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span class="counter-value" data-target="{{$dudi}}">{{$dudi}}</span></h4>
                                                        <a href="#">Total Seluruh Dudi</a>
                                                    </div>
                                                    <div class="avatar-sm flex-shrink-0">
                                                        <span class="avatar-title bg-soft-info rounded fs-3">
                                                            <i class="ri-building-fill text-success"></i>
                                                            
                                                        </span>
                                                    </div>
                                                </div>
                                            </div><!-- end card body -->
                                        </div><!-- end card -->
                                    </div><!-- end col -->

                                </div> <!-- end row-->
                                <div class="row">
                                <div class="col-xl-4">
                                    <div class="card card-animate">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div class="avatar-sm flex-shrink-0">
                                                    <span class="avatar-title bg-soft-success text-success rounded-2 fs-2">
                                                        <i class="ri-git-repository-fill"></i>
                                                    </span>
                                                </div>
                                                <div class="flex-grow-1 overflow-hidden ms-3">
                                                    <p class="text-uppercase fw-medium text-muted text-truncate mb-3">Jumlah Jurnal</p>
                                                    <div class="d-flex align-items-center mb-3">
                                                        <h4 class="fs-4 flex-grow-1 mb-0"><span class="counter-value" data-target="{{$jurnal}}">{{$jurnal}}</span></h4>
                                                        <span class="badge badge-soft-success fs-12"><i class="ri-arrow-up-s-line fs-13 align-middle me-1"></i></span>
                                                    </div>
                                                    <p class="text-muted text-truncate mb-0"> Total Seluruh Siswa</p>
                                                </div>
                                            </div>
                                        </div><!-- end card body -->
                                    </div>
                                </div><!-- end col -->

                                <div class="col-xl-4">
                                    <div class="card card-animate">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div class="avatar-sm flex-shrink-0">
                                                    <span class="avatar-title bg-soft-success text-success rounded-2 fs-2">
                                                        <i class="ri-git-repository-fill"></i>
                                                    </span>
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <p class="text-uppercase fw-medium text-muted mb-3">Jumlah Absen</p>
                                                    <div class="d-flex align-items-center mb-3">
                                                        <h4 class="fs-4 flex-grow-1 mb-0"><span class="counter-value" data-target="{{$absen}}">{{$absen}}</span></h4>
                                                        <span class="badge badge-soft-success fs-12"><i class="ri-arrow-up-s-line fs-13 align-middle me-1"></i></span>
                                                    </div>
                                                    <p class="text-muted mb-0">Total Seluruh Absen </p>
                                                </div>
                                            </div>
                                        </div><!-- end card body -->
                                    </div>
                                </div><!-- end col -->

                                <div class="col-xl-4">
                                    <div class="card card-animate">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div class="avatar-sm flex-shrink-0">
                                                    <span class="avatar-title bg-soft-success text-success rounded-2 fs-2">
                                                        <i class="ri-git-repository-fill"></i>
                                                    </span>
                                                </div>
                                                <div class="flex-grow-1 overflow-hidden ms-3">
                                                    <p class="text-uppercase fw-medium text-muted text-truncate mb-3">Jumlah Plotingan</p>
                                                    <div class="d-flex align-items-center mb-3">
                                                        <h4 class="fs-4 flex-grow-1 mb-0"><span class="counter-value" data-target="{{$plotingan}}">{{$plotingan}}</span></h4>
                                                        <span class="badge badge-soft-success fs-12"><i class="ri-arrow-up-s-line fs-13 align-middle me-1"></i></span>
                                                    </div>
                                                    <p class="text-muted text-truncate mb-0">Total Seluruh Plotingan </p>
                                                </div>
                                            </div>
                                        </div><!-- end card body -->
                                    </div>
                                </div><!-- end col -->
                            </div><!-- end row -->

                    </div>

                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->
            <div class="row">   
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Line with Data Labels</h4>
                                    <div class="card-toolbar" style="margin-left: 580px">
                                                    <form action="{{ url('filter') }}" method="GET" class="form-group">
                                                        @csrf
                                                        <select class="form-control" id="tahunPd" name="year">
                                                            <?php
                                                                $year = date('Y');
                                                                $min = $year - 1;
                                                                $max = $year;
                                                                for ($i = $max; $i >= $min; $i--){
                                                                    echo '<option value=' . $i . '>' . $i . '</option>';
                                                                }
                                                            ?>
                                                        </select>
                                                    </form>
                                                </div>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <div id="line_chart_datalabel" data-colors='["--vz-success", "--vz-danger"]' class="apex-charts" dir="ltr"></div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Basic Line Chart</h4>
                                    <div class="card-toolbar" style="margin-left: 580px">
                                                    <form action="{{ url('filter') }}" method="GET" class="form-group">
                                                        @csrf
                                                        <select class="form-control" id="tahunPd" name="year">
                                                            <?php
                                                                $year = date('Y');
                                                                $min = $year - 1;
                                                                $max = $year;
                                                                for ($i = $max; $i >= $min; $i--){
                                                                    echo '<option value=' . $i . '>' . $i . '</option>';
                                                                }
                                                            ?>
                                                        </select>
                                                    </form>
                                                </div>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <div id="line_chart_basic" data-colors='["--vz-primary"]' class="apex-charts" dir="ltr"></div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
            </div>

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>document.write(new Date().getFullYear())</script> J - On | Journal Online.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                                Design & Develop by RQTeams.
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>   
</body>
        @endsection
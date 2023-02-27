@extends('siswa.mains')
@section('contents')
<header>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</header>
<body>
<div class="main-content-inner">
            <div class="col-md-12 rt_subheader">
                <div class="rt_subheader_main">
                    <h3 class="rt_subheader_title mb-mob-2">Selamat Datang {{Auth()->user()->name}} !!</h3>
                    <!-- <div class="rt_breadcrumb mb-mob-2">
                        <a href="#" class="rt_breadcrumb_home_icon"><i class="feather ft-home"></i></a>
                        <span class="rt_breadcrumb_separator"><i class="feather ft-chevrons-right"></i></span>
                        <a href="#" class="breadcrumb_link"> Home </a>
                        <span class="rt_breadcrumb_separator"><i class="feather ft-chevrons-right"></i></span>
                        <a href="#" class="breadcrumb_link"> Main Dashboard </a>
                    </div> -->
                </div>
                <div class="subheader_btns">
                    <!-- <a href="#" class="btn btn-sm btn-primary btn-inverse-primary"><i class="feather ft-edit mr-0"></i></a>
                    <a href="#" class="btn btn-sm btn-primary btn-inverse-primary"><i class="feather ft-watch mr-0"></i></a> -->
                    <a href="#" class="btn btn-sm btn-primary btn-inverse-primary">
                        <span>Today:</span>&nbsp;
                        <span>Jan 21</span>
                        <i class="feather ft-calendar ml-2"></i>
                    </a>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-3 col-md-6 stretched_card pl-mob-3 mb-mob-4">
                    <div class="card bg-primary analytics_card">
                        <div class="card-body">
                            <div class="d-flex flex-md-column flex-xl-row flex-wrap  align-items-center justify-content-between">
                                <div class="icon-rounded">
                                    <i class="feather ft-users text-info"></i>
                                </div>
                                <div class="text-white">
                                    <p class="mt-xl-0 text-xl-left mb-2">Total Siswa</p>
                                    <div class="d-flex flex-md-column flex-xl-row flex-wrap align-items-baseline align-items-md-center align-items-xl-baseline">
                                        <h3 class="mb-0 mb-md-1 mb-lg-0 mr-1 text-white">{{$siswa}}</h3>
                                        <small class="stats_icon"> <span class="feather ft-chevron-up"></span></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 stretched_card mb-mob-4">
                    <div class="card bg-success analytics_card">
                        <div class="card-body">
                            <div class="d-flex flex-md-column flex-xl-row flex-wrap  align-items-center justify-content-between">
                                <div class="icon-rounded">
                                    <i class="fa fa-book text-info"></i>
                                </div>
                                <div class="text-white">
                                    <p class="mt-xl-0 text-xl-left mb-2">Total Jurnal</p>
                                    <div class="d-flex flex-md-column flex-xl-row flex-wrap align-items-baseline align-items-md-center align-items-xl-baseline">
                                        <h3 class="mb-0 mb-md-1 mb-lg-0 mr-1 text-white">{{$jurnal}}</h3>
                                        <small class="stats_icon"> <span class="feather ft-chevron-up"></span></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 stretched_card mb-xs-mob-4">
                    <div class="card bg-danger analytics_card">
                        <div class="card-body">
                            <div class="d-flex flex-md-column flex-xl-row flex-wrap  align-items-center justify-content-between">
                                <div class="icon-rounded">
                                    <i class="feather ft-users text-danger"></i>
                                </div>
                                <div class="text-white">
                                    <p class="mt-xl-0 text-xl-left mb-2">Total Plotingan</p>
                                    <div class="d-flex flex-md-column flex-xl-row flex-wrap align-items-baseline align-items-md-center align-items-xl-baseline">
                                        <h3 class="mb-0 mb-md-1 mb-lg-0 mr-1 text-white">{{$plotingan}}</h3>
                                        <small class="stats_icon"> <span class="feather ft-chevron-up"></span></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @if(auth()->user()->role == 'Siswa')
                <div class="col-lg-3 col-md-6 stretched_card pr-mob-3">
                    <div class="card bg-dark analytics_card">
                        <div class="card-body">
                            <div class="d-flex flex-md-column flex-xl-row flex-wrap  align-items-center justify-content-between">
                                <div class="icon-rounded">
                                    <i class="feather ft-users text-dark"></i>
                                </div>
                                <div class="text-white">
                                    <p class="mt-xl-0 text-xl-left mb-2">Total Guru</p>
                                    <div class="d-flex flex-md-column flex-xl-row flex-wrap align-items-baseline align-items-md-center align-items-xl-baseline">
                                        <h3 class="mb-0 mb-md-1 mb-lg-0 mr-1 text-white">{{$guru}}</h3>
                                        <small class="stats_icon"><span class="feather ft-chevron-up"></span></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                @if(auth()->user()->role == 'Guru')
                <div class="col-lg-3 col-md-6 stretched_card pr-mob-3">
                    <div class="card bg-dark analytics_card">
                        <div class="card-body">
                            <div class="d-flex flex-md-column flex-xl-row flex-wrap  align-items-center justify-content-between">
                                <div class="icon-rounded">
                                    <i class="feather ft-users text-dark"></i>
                                </div>
                                <div class="text-white">
                                    <p class="mt-xl-0 text-xl-left mb-2">Total Guru</p>
                                    <div class="d-flex flex-md-column flex-xl-row flex-wrap align-items-baseline align-items-md-center align-items-xl-baseline">
                                        <h3 class="mb-0 mb-md-1 mb-lg-0 mr-1 text-white">{{$guru}}</h3>
                                        <small class="stats_icon"><span class="feather ft-chevron-up"></span></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                @if(auth()->user()->role == 'Dudi')
                <div class="col-lg-3 col-md-6 stretched_card pr-mob-3">
                    <div class="card bg-dark analytics_card">
                        <div class="card-body">
                            <div class="d-flex flex-md-column flex-xl-row flex-wrap  align-items-center justify-content-between">
                                <div class="icon-rounded">
                                    <i class="feather ft-users text-dark"></i>
                                </div>
                                <div class="text-white">
                                    <p class="mt-xl-0 text-xl-left mb-2">Total Dudi</p>
                                    <div class="d-flex flex-md-column flex-xl-row flex-wrap align-items-baseline align-items-md-center align-items-xl-baseline">
                                        <h3 class="mb-0 mb-md-1 mb-lg-0 mr-1 text-white">{{$dudi}}</h3>
                                        <small class="stats_icon"><span class="feather ft-chevron-up"></span></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif

            </div>

            <div class="row">
                <div class="col-lg-12 stretched_card mt-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card_title">Grafik Jurnal & Absen Harian Siswa</h4>
                            <div class="d-flex mt-2 total_sales_sec mt-3">
                                <div class="col-md-5">
                                    <p class="h1 lh-10 m-0 fw-300"><span>43,759</span>
                                    </p><small class="small text-success fs-11">Total Jurnal Dan Absen</small>
                                </div>
                                <div class="col-md-7 row no-gutters mt-2">
                                    <div class="col-sm-6">
                                        <div class="sales-info"><span class="sales-info-box bg-success mr-2"></span>
                                            <div class="sales-info-body">
                                                <h6>Total Jurnal</h6><small><span class="text-success"><i class="feather ft-chevron-up"></i> 17%</span>Bulan Ini</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="sales-info"><span class="sales-info-box bg-primary mr-2"></span>
                                            <div class="sales-info-body">
                                                <h6>Total Absen</h6><small><span class="text-danger"><i class="feather ft-chevron-down"></i> 23%</span>Bulan Ini</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="morris_line"></div>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-lg-4 stretched_card mt-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card_title">Vist by Country</h4>
                            <div id="country_map"></div>
                            <div class="country_vists">
                                <div class="country_vists_item">
                                    <div class="country_vists_wrapper">
                                        <div class="country_vists_title">
                                            San Francisco
                                        </div>
                                        <div class="country_vists_value">
                                            65%
                                        </div>
                                    </div>
                                    <div class="country_vists_progress">
                                        <div class="progress">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 70%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="country_vists_item">
                                    <div class="country_vists_wrapper">
                                        <div class="country_vists_title">
                                            Germany
                                        </div>
                                        <div class="country_vists_value">
                                            40%
                                        </div>
                                    </div>
                                    <div class="country_vists_progress">
                                        <div class="progress">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 40%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="country_vists_item">
                                    <div class="country_vists_wrapper">
                                        <div class="country_vists_title">
                                            France
                                        </div>
                                        <div class="country_vists_value">
                                            60%
                                        </div>
                                    </div>
                                    <div class="country_vists_progress">
                                        <div class="progress">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 60%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="country_vists_item">
                                    <div class="country_vists_wrapper">
                                        <div class="country_vists_title">
                                            Turkey
                                        </div>
                                        <div class="country_vists_value">
                                            75%
                                        </div>
                                    </div>
                                    <div class="country_vists_progress">
                                        <div class="progress">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 75%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="country_vists_item">
                                    <div class="country_vists_wrapper">
                                        <div class="country_vists_title">
                                            Nepal
                                        </div>
                                        <div class="country_vists_value">
                                            50%
                                        </div>
                                    </div>
                                    <div class="country_vists_progress">
                                        <div class="progress">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
            
            <!--  -->
        </div>
    </body>
@endsection
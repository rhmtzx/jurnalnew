@extends('siswa.mains')
@section('contents')
<header>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</header>
<body>
<div class="main-content-inner">
            <div class="col-md-12 rt_subheader">
                <div class="rt_subheader_main">
                    <h3 class="rt_subheader_title mb-mob-2">Selamat Datang Kembali {{Auth()->user()->name}} !!</h3>
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
                    <!-- <a href="#" class="btn btn-sm btn-primary btn-inverse-primary">
                        <span>Today:</span>&nbsp;
                        <span>Jan 21</span>
                        <i class="feather ft-calendar ml-2"></i>
                    </a> -->
                </div>
            </div>
            @if(auth()->user()->role == 'Dudi')
            <div class="row mt-4">
                <div class="col-lg-6 col-md-6 stretched_card pl-mob-3 mb-mob-4">
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
                <div class="col-lg-6 col-md-6 stretched_card mb-mob-4">
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
            @endif
            @if(auth()->user()->role == 'Siswa')
            <div class="row mt-4">
                <div class="col-lg-6 col-md-6 stretched_card pl-mob-3 mb-mob-4">
                    <div class="card bg-primary analytics_card">
                        <div class="card-body">
                            <div class="d-flex flex-md-column flex-xl-row flex-wrap  align-items-center justify-content-between">
                                <div class="icon-rounded">
                                    <i class="feather ft-users text-info"></i>
                                </div>
                                <div class="text-white">
                                    <p class="mt-xl-0 text-xl-left mb-2">Total Guru</p>
                                    <div class="d-flex flex-md-column flex-xl-row flex-wrap align-items-baseline align-items-md-center align-items-xl-baseline">
                                        <h3 class="mb-0 mb-md-1 mb-lg-0 mr-1 text-white">{{$guru}}</h3>
                                        <small class="stats_icon"> <span class="feather ft-chevron-up"></span></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 stretched_card mb-mob-4">
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
            @endif
            @if(auth()->user()->role == 'Guru')
            <div class="row mt-4">
                <div class="col-lg-6 col-md-6 stretched_card pl-mob-3 mb-mob-4">
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
                <div class="col-lg-6 col-md-6 stretched_card mb-mob-4">
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
            @endif
            
                <!-- Blockquotes area -->
                <div class="col-lg-12 mt-4 stretched_card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card_title"></h4>
                            <blockquote class="blockquote">
                                <p class="mb-3">" Sebuah jurnal adalah buku harian yang menjadi saksi perjalanan hidupmu. Setiap hal yang kamu tulis di dalamnya akan menjadi kenangan berharga yang dapat diingat sepanjang hidup. Jangan pernah meremehkan kekuatan dari sebuah jurnal, karena di dalamnya terdapat kekuatan yang mampu mengubah hidupmu. Setiap pengalaman yang kamu alami, baik itu suka atau duka, dan gunakan jurnalmu sebagai kanvas untuk mewarnai kehidupanmu dengan pengalaman-pengalaman yang indah yang pernah kamu alami. "</p>
                                <footer class="blockquote-footer">UNKNOWN
                                    
                                </footer>
                            </blockquote>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
        <div class="col-lg-12 mt-mob-4">
            <div class="card">
                <div class="card-body">
                    <div id="calendar" class="full_calendar"></div>
                </div>
            </div>
        </div>
                
    </body>

@endsection
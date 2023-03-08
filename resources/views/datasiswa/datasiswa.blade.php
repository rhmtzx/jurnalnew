@extends('layout.main')
@section('content')
<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

<!-- removeNotificationModal -->
<div id="removeNotificationModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="NotificationModalbtn-close"></button>
            </div>
            <div class="modal-body">
                <div class="mt-2 text-center">
                    <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>
                    <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                        <h4>Are you sure ?</h4>
                        <p class="text-muted mx-4 mb-0">Are you sure you want to remove this Notification ?</p>
                    </div>
                </div>
                <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                    <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn w-sm btn-danger" id="delete-notification">Yes, Delete It!</button>
                </div>
            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
        <!-- ========== App Menu ========== -->

        <!-- Left Sidebar End -->
        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Data Kelas Siswa Page</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Data Sekolah</a></li>
                                        <li class="breadcrumb-item active">Data Kelas Siswa Page</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <form method="GET" action="/datasiswa">
                            <input style="height: 40px;
                            margin-left: 0px;" type="text" name="keyword"/>
                            <button style="width: 50px;
                            height: 40px;" class="btn btn-primary" type="submit">Cari</button>
                    </form>
                    <br>
                    <div class="row" >
                      @foreach ($data1 as $row )

                        <div class="col-sm-6 col-xl-3" >
                            <!-- Simple card -->

                            <div class="card" style="">
                                <img src="{{ asset('fotodudi/' . $row->foto) }}" alt=""
                                style="width: 75px; margin: auto; padding-top: 10px">
                                <div class="card-body">
                                    <h4 class="card-title mb-2 text-center">{{ $row->namajurusan }}</h4>
                                    <br>
                                    <p class="card-text text-center">Data Kelas {{ $row->namajurusan }}</p>
                                    <div class="text-center">
                                        <br>
                                        <a href="/data/{{ $row->id }}" class="btn btn-info">Detail</a>
                                    </div>
                                </div>
                                </div>

                            </div><!-- end card -->
                        @endforeach

                        </div><!-- end col -->
                        {{ $data1->links() }}
@endsection

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
                                <h4 class="mb-sm-0">Data Jurusan Page</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Data Sekolah</a></li>
                                        <li class="breadcrumb-item active">Data Jurusan</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->


                   <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Data Seluruh Jurusan</h5>
                                    <br>
                                    <div>
                                <a href="/tambahjurusan" class="btn btn-success mb-10">Tambah Jurusan +</a>
                                    </div>
                                    <br>
                                </div>
                                <div class="card-body">
                                    <table id="jurusan" class="table align-middle table-nowrap" >
                                                <thead class="table-light">
                                                    <tr>
                                                        <th scope="col" style="width: 50px;">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="checkAll" value="option">
                                                            </div>
                                                        </th>
                                                      <th scope="col">#</th>

                                                    <th scope="col">Aksi</th>
                                                    <th scope="col">Nama Jurusan</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="list form-check-all">
                                                     @php
                                                    $no = 1;
                                                    @endphp
                                                    @foreach ($data as $row)
                                                    <tr>
                                                        <th scope="row">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="chk_child" value="option1">
                                                            </div>
                                                        </th>
                                                        <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2101</a></td>
                                                <th scope="row">{{ $no++ }}</th>
                                                <td>{{ $row->namajurusan}}</td>
                                                        <td>
                                                            <div class="d-flex gap-2">
                                                                <div class="edit">
                                                                    <a href="/tampiljurusan/{{ $row->id }}" class="btn btn-warning"><i class="fa-sharp fa-solid fa-pen-to-square"></i></a>
                                                                    <a href="#" class="btn btn-danger deletejurusan" data-id="{{ $row->id }}"
                                                                    data-nama="{{ $row->nama }}"><i class="fa-sharp fa-solid fa-trash"></i></a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                </div>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->

                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->


        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->



    <!--start back-to-top-->
    <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
    <!--end back-to-top-->

    <!--preloader-->

    <!-- JAVASCRIPT -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js')}}"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

        <!-- DataTablesScript -->
        <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.12.1/datatables.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#jurusan').DataTable();
            });
        </script>

    </body>

    <script>
        $('.deletejurusan').click(function() {
            var kategoriid = $(this).attr('data-id');
            var kategori = $(this).attr('data-kategori');
            swal({
                title: "Yakin Ingin delete Data ?",
                text: "Kamu Yakin Akan Menghapus Data Ini !",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    window.location = "/deletejurusan/" + kategoriid + ""
                    swal("Data Berhasil Di Hapus", {
                        icon: "success",
                    });
                } else {
                    swal("Data Gagal Di Hapus");
                }
            });
        });
    </script>

    <script>
        @if (Session::has('success'))
        toastr.success("{{ Session::get('success') }}")
        @endif
    </script>

    <script>
        @if (Session::has('error'))
        toastr.error("{{ Session::get('error') }}")
        @endif
    </script>

</body>


<!-- Mirrored from themesbrand.com/velzon/html/default/tables-datatables.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Feb 2023 07:42:44 GMT -->
<script>
    $('.deletejurusan').click(function() {
        var kategoriid = $(this).attr('data-id');
        var kategori = $(this).attr('data-kategori');
        swal({
            title: "Yakin Ingin delete Data ?",
            text: "Kamu Yakin Akan Menghapus Data Ini !",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                window.location = "/deletejurusan/" + kategoriid + ""
                swal("Data Berhasil Di Hapus", {
                    icon: "success",
                });
            } else {
                swal("Data Gagal Di Hapus");
            }
        });
    });
</script>

<script>
    @if (Session::has('success'))
    toastr.success("{{ Session::get('success') }}")
    @endif
</script>

<script>
    @if (Session::has('error'))
    toastr.error("{{ Session::get('error') }}")
    @endif
</script>

<!-- Mirrored from wrappixel.com/demos/admin-templates/materialart/html/ltr/table-datatable-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 22 Jan 2023 14:20:10 GMT -->
</html>
@endsection

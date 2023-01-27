@extends('layout.main')
@section('content')
<!DOCTYPE html>
<html>


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('material/wrappixel.com/demos/admin-templates/materialart/assets/images/favicon.png')}}">
    <title></title>
    <link href="{{asset('material/wrappixel.com/demos/admin-templates/materialart/dist/css/style.css')}}" rel="stylesheet">
    <!-- This page CSS -->
    <link href="{{asset('material/wrappixel.com/demos/admin-templates/materialart/dist/css/pages/data-table.css')}}" rel="stylesheet">

<!-- FONT AWESOME LINK -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <div class="main-wrapper" id="main-wrapper">
        <div class="page-titles">
                <div class="d-flex align-items-center">
                    <h5 class="font-medium m-b-0">Cards</h5>
                    <div class="custom-breadcrumb ml-auto">
                        <a href="#!" class="breadcrumb">Home</a>
                        <a href="#!" class="breadcrumb">Cards</a>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col s12">
                        <div class="card">
                            <div class="card-content">
                                <h1 class="card-title">Data Siswa</h1>
                                <h6 class="card-subtitle">Seluruh Data Siswa Sekolah Ada Disini!</h6>
                                <br>
                                <a href="/tambahdatasiswa" class="btn btn-success mb-10">Tambah Siswa +</a>
                                <br>

                                <div class="table-responsive">
                                    <table id="datasiswa" class="table text-center table-bordered dt-responsive nowrap"
                                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Nis Siswa</th>
                                                <th scope="col">Nama Siswa</th>
                                                <th scope="col">Kelas</th>
                                                <th scope="col">Jurusan</th>
                                                <th scope="col">Alamat Siswa</th>
                                                <th scope="col">No Telepon Siswa</th>
                                                <th scope="col">Dibuat</th>
                                                <th scope="col">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $no = 1;
                                            @endphp
                                            @foreach ($data as $row)
                                                <tr>
                                                    <th scope="row">{{ $no++ }}</th>
                                                    <td>{{ $row->nissiswa }}</td>
                                                    <td>{{ $row->namasiswa }}</td>
                                                    <td>{{ $row->kelas }}</td>
                                                    <td>{{ $row->jurusan }}</td>
                                                    <td>{{ $row->alamatsiswa }}</td>
                                                    <td>{{ $row->notlpsiswa }}</td>
                                                    <td>{{ $row->created_at}}</td>
                                                    <td scope="row">
                                                        <a href="/tampildatasiswa/{{ $row->id }}"
                                                            class="btn btn-warning"><i
                                                                class="fa-sharp fa-solid fa-pen-to-square"></i></a>
                                                        <a href="#" class="btn btn-danger deletedatasiswa"
                                                            data-id="{{ $row->id }}"
                                                             data-nissiswa="{{ $row->nissiswa }}"><i
                                                                class="fa-sharp fa-solid fa-trash"></i></a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>

            </div>


        <a href="#" data-target="right-slide-out" class="sidenav-trigger right-side-toggle btn-floating btn-large waves-effect waves-light red"><i class="material-icons">settings</i></a>

        <div class="chat-windows"></div>
        <!-- ============================================================== -->
        <!-- Right Sidebar -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- All Required js -->
    <!-- ============================================================== -->
    <script src="{{asset('material/wrappixel.com/demos/admin-templates/materialart/assets/libs/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('material/wrappixel.com/demos/admin-templates/materialart/dist/js/materialize.min.js')}}"></script>
    <script src="{{asset('material/wrappixel.com/demos/admin-templates/materialart/assets/libs/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js')}}"></script>
    <!-- ============================================================== -->
    <!-- Apps -->
    <!-- ============================================================== -->
    <script src="{{asset('material/wrappixel.com/demos/admin-templates/materialart/dist/js/app.js')}}"></script>
    <script src="{{asset('material/wrappixel.com/demos/admin-templates/materialart/dist/js/app.init.js')}}"></script>
    <script src="{{asset('material/wrappixel.com/demos/admin-templates/materialart/dist/js/app-style-switcher.js')}}"></script>
    <!-- ============================================================== -->
    <!-- Custom js -->
    <!-- ============================================================== -->
    <script src="{{asset('material/wrappixel.com/demos/admin-templates/materialart/dist/js/custom.min.js')}}"></script>
    <!-- ============================================================== -->
    <!-- This page plugin js -->
    <!-- ============================================================== -->
    <script src="{{asset('material/wrappixel.com/demos/admin-templates/materialart/assets/extra-libs/DataTables/datatables.min.js')}}"></script>
    <script src="{{asset('material/wrappixel.com/demos/admin-templates/materialart/dist/js/pages/datatable/datatable-basic.init.js')}}"></script>

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
        <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.12.1/datatables.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#datasiswa').DataTable();
            });
        </script>
</body>

<script>
    $('.deletedatasiswa').click(function() {
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
                window.location = "/deletedatasiswa/" + kategoriid + ""
                swal("Data Jurusan Berhasil Di Hapus", {
                    icon: "success",
                });
            } else {
                swal("Data Jurusan Gagal Di Hapus");
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

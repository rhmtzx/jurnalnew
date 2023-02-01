@extends('siswa.welcomes')
@section('contents')

<!--  BEGIN MAIN CONTAINER  -->
<!--     <div class="main-container" id="container">
        <div class="overlay"></div>
        <div class="cs-overlay"></div> -->

        <!--  BEGIN SIDEBAR  -->
        <head>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        </head>

        <!--  END SIDEBAR  -->
        <body>
            <!--  BEGIN CONTENT PART  -->
            <div id="content" class="main-content">
                <div class="container">
                    <div class="page-header">
                        <div class="page-title">
                            <h3>Data Siswa</h3>
                            <div class="crumbs">

                                <ul id="breadcrumbs" class="breadcrumb">
                                    <li><a href="index.html"><i class="flaticon-home-fill"></i></a></li>
                                    <li><a href="/datatambahjurnal">Data Jurnal</a></li>
                                    <li class="active"><a href="#">Data Jurnal</a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="row" id="cancel-row">

                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Data Jurnal</h4>
                                        <br>
                                <a href="/tambahtambahjurnal" class="btn btn-success mb-10">Tambah Jurnal +</a>
                                <br>

                                    </div>

                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <div class="table-responsive mb-4">
                                    <table id="datajurnal" class="table text-center table-bordered dt-responsive nowrap"
                                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Nama Siswa</th>
                                                <th scope="col">Foto</th>
                                                <th scope="col">Judul</th>
                                                <th scope="col">Deskripsi</th>
                                                <th scope="col">Dibuat</th>
                                                <th scope="col">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $no = 1;
                                            @endphp
                                            @foreach ($data as $row)
                                            @if ($row->usersiswa == Auth::user()->name)
                                                <tr>
                                                    <th scope="row">{{ $no++ }}</th>
                                                    <td>{{ $row->usersiswa }}</td>

                                                    <td>
                                                        <img src="{{ asset('fotodudi/' . $row->foto) }}" alt=""
                                                            style="width: 40px">
                                                    </td>
                                                    <td>{{ $row->judul }}</td>
                                                    <td>{!! $row->deskripsi !!}</td>
                                                    <td>{{ $row->created_at}}</td>
                                                    <td scope="row">
                                                        <a href="/tampiltambahjurnal/{{ $row->id }}"
                                                            class="btn btn-warning"><i
                                                                class="fa-sharp fa-solid fa-pen-to-square"></i></a>
                                                        <a href="#" class="btn btn-danger deletetambahjurnal"
                                                            data-id="{{ $row->id }}"
                                                             data-judul="{{ $row->judul }}"><i
                                                                class="fa-sharp fa-solid fa-trash"></i></a>
                                                    </td>
                                                </tr>
                                                @elseif(Auth::user()->role == 'Guru')
                                                <tr>
                                                    <th scope="row">{{ $no++ }}</th>
                                                    <td>{{ $row->usersiswa }}</td>
                                                    <td>
                                                        <img src="{{ asset('fotodudi/' . $row->foto) }}" alt=""
                                                            style="width: 40px">
                                                    </td>
                                                    <td>{{ $row->judul }}</td>
                                                    <td>{!! $row->deskripsi !!}</td>
                                                    <td>{{ $row->created_at}}</td>
                                                    <td scope="row">
                                                        <a href="/tampiltambahjurnal/{{ $row->id }}"
                                                            class="btn btn-warning"><i
                                                                class="fa-sharp fa-solid fa-pen-to-square"></i></a>
                                                        <a href="#" class="btn btn-danger deletetambahjurnal"
                                                            data-id="{{ $row->id }}"
                                                             data-judul="{{ $row->judul }}"><i
                                                                class="fa-sharp fa-solid fa-trash"></i></a>
                                                    </td>
                                                </tr>
                                                @endif
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
    </div>
    <!-- END PAGE LEVEL CUSTOM SCRIPTS -->
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
        $('#datajurnal').DataTable();
    });
</script>
</body>

<script>
    $('.deletetambahjurnal').click(function() {
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
                window.location = "/deletetambahjurnal/" + kategoriid + ""
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
</body>
@endsection

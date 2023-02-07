@extends('siswa.mains')
@section('contents')
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

    <div class="main-content-inner">
        <div class="row">
            <!-- Progress Table start -->
            <div class="col-12 mt-4">
                <div class="card">
                    <div class="card-body">
                        @if(Auth::user()->role == 'Guru')
                        <h4 class="card_title">Data Absen Seluruh Siswa</h4>
                        @endif
                        @if(Auth::user()->role == 'Siswa')
                        <h4 class="card_title">Data Absen Siswa</h4>
                        @endif

                        @if(Auth::user()->role == 'Guru')
                        <ul>
                            <li><h6>Seluruh Absen Siswa Ada Disini</h6></li>
                        </ul>
                        @endif
                        @if(Auth::user()->role == 'Siswa')
                        <ul>
                            <li><h6>Seluruh Data Absen Ada Disini</h6></li>
                        </ul>
                        @endif
                            <br>
                            <div class="single-table">
                                @if(Auth::user()->role == 'Siswa')
                                <a href="/tambahabsen" class="btn btn-fixed-w btn-outline-success mb-10">Tambah +</a>
                                @endif
                                <div class="table-responsive">
                                    <br>
                                    <table id="absen" class="table text-center table-bordered dt-responsive nowrap"
                                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Foto</th>
                                            <th scope="col">Nama Siswa</th>
                                            <th scope="col">Keterangan</th>
                                            <th scope="col">Status Jurnal</th>
                                            <th scope="col">Dibuat</th>
                                            @if(Auth::user()->role == 'Siswa')
                                            <th scope="col">Aksi</th>
                                            @endif
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                        $no = 1;
                                        @endphp

                                        @if(Auth::user()->role == 'Siswa')
                                        @foreach ($data as $row)
                                        <tr>
                                            <th scope="row">{{ $no++ }}</th>

                                            <td>
                                                <img src="{{ asset('fotodudi/' . $row->foto) }}" alt=""
                                                style="width: 40px">
                                            </td>
                                            <td>{{ $row->usersiswa }}</td>

                                            <td>{{ $row->keterangan }}</td>
                                            <!-- <td>{{ $row->statusjurnal }}</td> -->
                                            @if ($row->statusjurnal == 'Telah Disetujui')
                                            <td>
                                                <span class="badge badge-success badge-success ">Telah Disetujui</span>
                                            </td>
                                            @elseif ($row->statusjurnal == 'Menunggu Persetujuan')
                                            <td>
                                                <span class="badge badge-success badge-warning ">Menunggu Persetujuan</span>
                                            </td>
                                            @endif
                                            <td>{{ $row->created_at}}</td>
                                            <td scope="row">
                                                    <a href="/tampilabsen/{{ $row->id }}"
                                                        class="btn btn-warning"><i
                                                        class="fa-sharp fa-solid fa-pen-to-square"></i></a>
                                                        <a href="#" class="btn btn-danger deleteabsen"
                                                        data-id="{{ $row->id }}"
                                                        data-keterangan="{{ $row->keterangan }}"><i
                                                        class="fa-sharp fa-solid fa-trash"></i></a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            @elseif(Auth::user()->role == 'Guru')
                                            @foreach($data2 as $row2)
                                            <tr>
                                                <th scope="row">{{ $no++ }}</th>
                                                <td>
                                                    <img src="{{ asset('fotodudi/' . $row2->foto) }}" alt=""
                                                    style="width: 40px">
                                                </td>
                                                <td>{{ $row2->usersiswa }}</td>
                                                <td>{{ $row2->keterangan }}</td>

                                                @if ($row2->statusjurnal == 'Telah Disetujui')
                                            <td>
                                                <span class="badge badge-success badge-success ">Telah Disetujui</span>
                                            </td>
                                            @elseif ($row2->statusjurnal == 'Menunggu Persetujuan')
                                            <td>
                                                <span class="badge badge-success badge-warning ">Menunggu Persetujuan</span>
                                            </td>
                                            @endif

                                                <td>{{ $row2->created_at}}</td>
                                                <td scope="row">
                                                    <a href="/tampilabsen/{{ $row2->id }}"
                                                        class="btn btn-warning"><i
                                                        class="fa-sharp fa-solid fa-pen-to-square"></i></a>
                                                        <a href="#" class="btn btn-danger deleteabsen"
                                                        data-id="{{ $row2->id }}"
                                                        data-keterangan="{{ $row2->keterangan }}"><i
                                                        class="fa-sharp fa-solid fa-trash"></i></a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                                @endif
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Progress Table end -->
                </div>
            </div>

            <!-- DATA TABLE JS -->
            <script src="{{asset('quinte/rtsolutz.com/raven/demo-quinte/quinte-html/light-sidebar/js/init/data-table.js')}}">
            </script>
            <script src="{{asset('quinte/rtsolutz.com/raven/demo-quinte/quinte-html/light-sidebar/vendors/data-table/js/jquery.dataTables.js')}}"></script>
            <script src="{{asset('quinte/rtsolutz.com/raven/demo-quinte/quinte-html/light-sidebar/vendors/data-table/js/jquery.dataTables.min.js')}}"></script>
            <script src="{{asset('quinte/rtsolutz.com/raven/demo-quinte/quinte-html/light-sidebar/vendors/data-table/js/dataTables.bootstrap4.min.js')}}"></script>
            <script src="{{asset('quinte/rtsolutz.com/raven/demo-quinte/quinte-html/light-sidebar/vendors/data-table/js/dataTables.responsive.min.js')}}"></script>
            <script src="{{asset('quinte/rtsolutz.com/raven/demo-quinte/quinte-html/light-sidebar/vendors/data-table/js/responsive.bootstrap.min.js')}}"></script>

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
                $('#absen').DataTable();
            });
        </script>

    </body>

    <script>
        $('.deleteabsen').click(function() {
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
                    window.location = "/deleteabsen/" + kategoriid + ""
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

    @endsection
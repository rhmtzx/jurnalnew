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
                            <h4 class="card_title">Data Siswa</h4>
                            <ul>
                            <li><h6>Data Siswa Ada Disini</h6></li></ul>
                            <br>
                            <div class="single-table">
                                <div class="table-responsive">
                                    <table id="bismillah" class="table table-striped table-bordered table-hover" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Nis Siswa</th>
                                                <th scope="col">Nama Siswa</th>
                                                <th scope="col">Jurusan</th>
                                                <th scope="col">Alamat Siswa</th>
                                                <th scope="col">No Telepon Siswa</th>
                                                <th scope="col">Dibuat</th>
                                                <!-- <th scope="col">Aksi</th> -->
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $no = 1;
                                            @endphp

                                            @if(Auth::user()->role == 'Siswa')
                                            @foreach ($data2 as $row2)
                                                <tr>
                                                    <th scope="row">{{ $no++ }}</th>
                                                    <td>{{ $row2->nissiswa }}</td>
                                                    <td>{{ $row2->namasiswa }}</td>
                                                    <td>{{ $row2->jurusans->namajurusan }}</td>
                                                    <td>{{ $row2->alamatsiswa }}</td>
                                                    <td>{{ $row2->notlpsiswa }}</td>
                                                    <td>{{ $row2->created_at}}</td>
                                                    <!-- <td scope="row">
                                                        <a href="/tampildatasiswa/{{ $row2->id }}"
                                                            class="btn btn-warning"><i
                                                                class="fa-sharp fa-solid fa-pen-to-square"></i></a> -->
                                                        <!-- <a href="#" class="btn btn-danger deletedatasiswa"
                                                            data-id="{{ $row2->id }}"
                                                             data-nissiswa="{{ $row2->nissiswa }}"><i
                                                                class="fa-sharp fa-solid fa-trash"></i></a> -->
                                                    </td>
                                                </tr>
                                            @endforeach
                                            @endif
                                            @if(Auth::user()->role == 'Guru')
                                            @foreach ($data3 as $row3)
                                                <tr>
                                                    <th scope="row">{{ $no++ }}</th>
                                                    <td>{{ $row3->nissiswa }}</td>
                                                    <td>{{ $row3->namasiswa }}</td>
                                                    <td>{{ $row3->kelas }}</td>
                                                    <td>{{ $row3->jurusan }}</td>
                                                    <td>{{ $row3->alamatsiswa }}</td>
                                                    <td>{{ $row3->notlpsiswa }}</td>
                                                    <td>{{ $row3->created_at}}</td>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            @endif
                                            @if(Auth::user()->role == 'Dudi')
                                            @foreach ($data5 as $row5)
                                                <tr>
                                                    <th scope="row">{{ $no++ }}</th>
                                                    <td>{{ $row5->nissiswa }}</td>
                                                    <td>{{ $row5->namasiswa }}</td>
                                                    <td>{{ $row5->kelas }}</td>
                                                    <td>{{ $row5->jurusan }}</td>
                                                    <td>{{ $row5->alamatsiswa }}</td>
                                                    <td>{{ $row5->notlpsiswa }}</td>
                                                    <td>{{ $row5->created_at}}</td>
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
            <!-- accordion style 2 start -->

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
        $('#bismillah').DataTable();
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

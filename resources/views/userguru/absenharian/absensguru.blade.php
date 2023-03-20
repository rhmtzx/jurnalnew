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
                        <h4 class="card_title">Data Absen Semua Siswa </h4>
                        <ul>
                            <li><h6>Semua Absen Siswa Ada Disini</h6></li></ul>
                            <br>
                            <div class="single-table">
                                <div class="table-responsive">
                                    <br>
                                    <table id="Jurnal" class="table text-center table-bordered dt-responsive nowrap"
                                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Nama Siswa</th>
                                            <th scope="col">Waktu Masuk</th>
                                            <th scope="col">Status Masuk</th>
                                            <th scope="col">Waktu Keluar</th>
                                            <th scope="col">Status Keluar</th>
                                            <th scope="col">Tanggal</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                        $no = 1;
                                        @endphp
                                            @if(count($data4)>0)
                                            @foreach($data4 as $row4)

                                            <tr>
                                                <th scope="row">{{ $no++ }}</th>
                                                <td>{{ $row4->namasiswa->namasiswa }}</td>
                                                
                                                <td>{{ $row4->masuk }}</td>
                                                @if ($row4->statusmasuk == 'Hadir')
                                                <td>
                                                    <span class="badge badge-success badge-success ">Hadir</span>
                                                </td>
                                                @elseif ($row4->statusmasuk == 'Terlambat')
                                                <td>
                                                    <span class="badge badge-success badge-danger ">Terlambat</span>
                                                </td>
                                                @endif

                                                <td>{{ $row4->keluar }}</td>
                                                @if ($row4->statuskeluar == 'Telah Keluar')
                                                <td>
                                                    <span class="badge badge-success badge-success ">Telah Keluar</span>
                                                </td>
                                                @elseif ($row4->statuskeluar == 'Belum Waktunya')
                                                <td>
                                                    <span class="badge badge-success badge-danger ">Belum Waktunya</span>
                                                </td>
                                                @endif

                                                <td>{{ $row4->created_at }}</td>

                                            @endforeach
                                            @endif
                                            </tbody>
                                        </table>
                                        <br>
                                        <a href="javascript:history.back()" class="btn btn-rounded btn-fixed-w btn-outline-danger mb-3">Kembali</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Progress Table end -->
                </div>
            </div>
           

            <!-- Large modal modal -->
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
                $('#Jurnal').DataTable();
            });
        </script>

        <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
        <script>
            $('.statusjurnal').change(function(){
                var statusjurnal = $(this).val();
                // var judul = statusjurnal.substr(0,13);
                var statusjurnal = statusjurnal.substr(13,0);
                // alert(statusjurnal);

                $.ajax({
                    url : "<?php= base_url()?>TambahjurnalController/update_status",
                    method : "post",
                    data: {judul:judul, statusjurnal:statusjurnal}
                })
            })
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

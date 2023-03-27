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
                        <h4 class="card_title">Tambah Waktu Masuk Dan Keluar</h4>
                        <ul>
                            <!-- <li><h6>Tambahkan Waktu Untuk Masuk Dan Keluar</h6></li></ul> -->
                            
                            <div class="single-table">
                                <div class="table-responsive">
                                    <br>
                                    <form action="/insertsetting" method="POST" enctype="multipart/form-data" >
                                        @csrf
                                            <!-- SHIFT PERTAMA -->
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label"><h6>Jam Masuk</h6></label>
                                                <input class="form-control form-control-lg input-rounded mb-4" name="masuk" type="time" placeholder="Masukan Judul">
                                            @error('masuk')
                                            <div class="text-danger">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label"><h6>Jam Keluar</h6></label>
                                                <input class="form-control form-control-lg input-rounded mb-4" name="keluar" type="time" placeholder="Masukan Judul">
                                            @error('keluar')
                                            <div class="text-danger">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                            </div>
                                            <br>
                                            <!-- SHIFT KEDUA -->
                                            <label><strong><em>SHIFT KEDUA (ABAIKAN JIKA TIDAK ADA)</em></strong></label>
                                            <br>
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label"><h6>Jam Masuk</h6></label>
                                                <input class="form-control form-control-lg input-rounded mb-4"
                                                 name="masukk" type="time" placeholder="Masukan Judul">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label"><h6>Jam Keluar</h6></label>
                                                <input class="form-control form-control-lg input-rounded mb-4"
                                                 name="keluarr" type="time" placeholder="Masukan Judul">
                                            </div>

                                            <button type="submit" class="btn btn-rounded btn btn-primary mb-3"><i class="ion-paper-airplane"></i>Submit Data</button>
                                            <a href="javascript:history.back()" class="btn btn-rounded btn-fixed-w btn-danger mb-3">Kembali</a>
                                    </form>
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
                $('#Jurnal').DataTable();
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

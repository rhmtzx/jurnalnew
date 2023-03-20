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
                        <h4 class="card_title">Data Setting Absen</h4>
                        <ul>
                            <li><h6>Data Setting Ada Disini !!</h6></li></ul>
                            <br>
                            <div class="single-table">
                                <a href="/tambahsetting" class="btn btn-fixed-w btn-outline-success mb-10">Tambah +</a>

                                <div class="table-responsive">
                            <div class="single-table">
                                    <br>

                                <div class="table-responsive">
                                    <br>
                                    <table id="Jurnal" class="table text-center table-bordered dt-responsive nowrap"
                                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Masuk</th>
                                            <th scope="col">Keluar</th>
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
                                                <td>{{ $row->masuk}}</td>
                                                <td>{{ $row->keluar}}</td>
                                                <td>{{ $row->created_at}}</td>
                                            <td scope="row">
                                                <a href="/tampilsetting/{{ $row->id }}"
                                                    class="btn btn-warning"><i
                                                    class="fa-sharp fa-solid fa-pen-to-square"></i></a>
                                                    <a href="#" class="btn btn-danger deletesetting"
                                                    data-id="{{ $row->id }}"
                                                    data-judul="{{ $row->judul }}"><i
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
                    <!-- Progress Table end -->
                </div>
            </div>



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
        $('.deletesetting').click(function() {
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
                    window.location = "/deletesetting/" + kategoriid + ""
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
    <script>
        $('.td-ellipsis').each(function() {
    var isi_konten = $(this).text();

    if (isi_konten.length > 10) { // sesuaikan dengan panjang karakter maksimum yang diinginkan
        isi_konten = isi_konten.substr(0, 10) + '...';
    }

    $(this).html('<div class="summernote-ellipsis">' + isi_konten + '</div>');
    $('.summernote-ellipsis').summernote({
        toolbar: [],
        airMode: true,
        disableResizeEditor: true,
        height: 150,
        focus: false,
        popover: false,
        dialogsInBody: true,
        disableDragAndDrop: true,
        shortcuts: false,
        codeviewFilter: true,
        codeviewIframeFilter: true
    });
});
    </script>

    @endsection

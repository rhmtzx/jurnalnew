@extends('siswa.mains')
@section('contents')
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="main-content-inner">
        <div class="row">

            <div class="col-12 mt-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card_title">Data Jurnal Hari Ini</h4>
                        <ul>
                            <li><h6>Data Jurnal Hari Ini Milik Anda Masuk Disini !!</h6></li></ul>
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
                                            <th scope="col">Foto</th>
                                            <th scope="col">Judul</th>
                                            <th scope="col">Status Jurnal</th>
                                            <th scope="col">Pesan Jika Ditolak</th>
                                            <th scope="col">Jurnal Dibuat</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                        $no = 1;
                                        @endphp
                                        @foreach($jurnals as $row4)
                                            <tr>
                                                <th scope="row">{{ $no++ }}</th>
                                                <td>{{ $row4->namasiswa->namasiswa }}</td>
                                                <td>
                                                    <a class="image-popup" href="{{ asset('fotodudi/' . $row4->foto) }}">
                                                    <img class="gallery-img img-fluid mx-auto" src="{{ asset('fotodudi/' . $row4->foto) }}" alt=""
                                                    style="width: 40px"></a>
                                                </td>
                                                <td>{{ $row4->judul }}</td>
                                                @if ($row4->statusjurnal == 'Telah Disetujui')
                                                <td>
                                                    <span class="badge badge-success badge-success ">Telah Disetujui</span>
                                                </td>
                                                @elseif ($row4->statusjurnal == 'Menunggu Persetujuan')
                                                <td>
                                                    <span class="badge badge-success badge-warning ">Menunggu Persetujuan</span>
                                                </td>
                                                @elseif ($row4->statusjurnal == 'Jurnal Ditolak')
                                                <td>
                                                    <span class="badge badge-success badge-danger ">Jurnal Ditolak</span>
                                                </td>
                                                @endif
                                                <td>{{ $row4->pesanjurnal }}</td>
                                                <td>{{ $row4->created_at}}</td>
                                            </tr>
                                        @endforeach
                                                
                                    </tbody>
                                    </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                    <!-- Progress Table end -->
                
            <br>
                <div class="card">
                    <div class="card-body">
                        <h4 class="card_title">Data Absen Hari Ini</h4>
                        <ul>
                            <li><h6>Data Absen Hari Ini Milik Anda Masuk Disini !!</h6></li></ul>
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
                                            @foreach($today as $hihi)
                                            <tr>
                                                <th scope="row">{{ $no++ }}</th>
                                                
                                                <th>{{$hihi->namasiswa->namasiswa}}</th>

                                                <th>{{$hihi->masuk}}</th> <!-- Waktu Masuk -->

                                                @if ($hihi->statusmasuk == 'Hadir')
                                                <td>
                                                    <span class="badge badge-success badge-success ">Hadir</span>
                                                </td>
                                                @elseif ($hihi->statusmasuk == 'Terlambat')
                                                <td>
                                                    <span class="badge badge-success badge-danger ">Terlambat</span>
                                                </td>
                                                @endif



                                                <th>{{$hihi->keluar}}</th> <!-- Waktu Keluar -->

                                                @if ($hihi->statuskeluar == 'Belum Waktunya')
                                                <td>
                                                    <span class="badge badge-success badge-danger ">Belum Waktunya</span>
                                                </td>
                                                @elseif ($hihi->statuskeluar == 'Telah Keluar')
                                                <td>
                                                    <span class="badge badge-success badge-success ">Telah Keluar</span>
                                                </td>
                                                @endif
                                                
                                                <th>{{$hihi->created_at}}</th>
                                            </tbody>
                                            @endforeach

                                        </table>
                                    </div>
                                </div>
                            </div>
                    </div>
            <br>
                <div class="card">
                    <div class="card-body">
                        <h4 class="card_title">Data Izin Hari Ini</h4>
                        <ul>
                            <li><h6>Data Izin Hari Ini Milik Anda Masuk Disini !!</h6></li></ul>
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
                                            <th scope="col">Foto</th>
                                            <th scope="col">Keterangan</th>
                                            <th scope="col">Status Jurnal</th>
                                            <th scope="col">Tanggal</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                        $no = 1;
                                        @endphp
                                            @foreach($izins as $hihi)
                                            <tr>
                                                <th scope="row">{{ $no++ }}</th>
                                                
                                                <th>{{$hihi->namasiswa->namasiswa}}</th>
                                                <td>
                                                <a class="image-popup" href="{{ asset('fotodudi/' . $hihi->foto) }}">
                                                    <img class="gallery-img img-fluid mx-auto" src="{{ asset('fotodudi/'.$hihi->foto) }}" alt=""
                                                    style="width: 40px">
                                                </a>
                                                </td>
                                                <td>{{ $hihi->keterangan }}</td>
                                            <!-- <td>{{ $hihi->statusjurnal }}</td> -->
                                            @if ($hihi->statusjurnal == 'Telah Disetujui')
                                            <td>
                                                <span class="badge badge-success badge-success ">Telah Disetujui</span>
                                            </td>
                                            @elseif ($hihi->statusjurnal == 'Menunggu Persetujuan')
                                            <td>
                                                <span class="badge badge-success badge-warning ">Menunggu Persetujuan</span>
                                            </td>
                                            @elseif ($hihi->statusjurnal == 'Absen Ditolak')
                                            <td>
                                                <span class="badge badge-success badge-danger ">Absen Ditolak</span>
                                            </td>
                                            @endif
                                            <td>{{ $hihi->created_at}}</td>
                                            </tbody>
                                            @endforeach

                                        </table>
                                    </div>
                                </div>
                            </div>
                    </div>

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

<script>
  var button = document.getElementById("masuk");
  var url = button.dataset.url;
  
  button.addEventListener("click", function() {
    // Kirim request AJAX ke URL menggunakan jQuery
    $.ajax({
      url: url,
      type: "POST",
      data: {_token: '{{ csrf_token() }}'},
      success: function(data) {
        // Tampilkan pesan sukses dan reload halaman
        alert(data.success);
        location.reload();
      },
      error: function(xhr, textStatus, errorThrown) {
        // Tampilkan pesan error jika terjadi kesalahan
        alert("Terjadi kesalahan: " + xhr.status + " " + xhr.statusText);
      }
    });
  });
</script>


<script>
  var button = document.getElementById("keluar");
  button.addEventListener("click", function() {
    // kode yang ingin dijalankan saat button diklik
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
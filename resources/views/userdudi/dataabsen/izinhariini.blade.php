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
                        <h4 class="card_title">Data Izin Semua Siswa Hari Ini</h4>
                        <ul>
                            <li><h6>Semua Izin Siswa Hari Ini Ada Disini !!</h6></li></ul>
                            <br>
                            <div class="single-table">
                                <div class="table-responsive">
                                    <br>
                                    <table id="Jurnal" class="table text-center table-bordered dt-responsive nowrap"
                                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Foto</th>
                                            <th scope="col">Nama Siswa</th>
                                            <th scope="col">Keterangan</th>
                                            <th scope="col">Status Absen</th>
                                            <th scope="col">Approve Absen</th>
                                            <th scope="col">Pesan Jika Ditolak</th>
                                            <th scope="col">Tanggal</th>
                                            <th scope="col">Detail</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                        $no = 1;
                                        @endphp
                                            @if(count($data7)>0)
                                            @foreach($data7 as $row4)
                                            <tr>
                                                <th scope="row">{{ $no++ }}</th>
                                                <td><a class="image-popup" href="{{ asset('fotodudi/' . $row4->foto) }}">
                                                    <img class="gallery-img img-fluid mx-auto" src="{{ asset('fotodudi/' . $row4->foto) }}" alt=""
                                                    style="width: 40px">
                                                </a>
                                                </td>
                                                <td>{{ $row4->namasiswa->namasiswa }}</td>

                                                <td>{{ $row4->keterangan }}</td>

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

                                                <td>
                                                    <button type="button" class="btn btn-box btn-fixed-w btn-outline-success mb-3" onclick="document.getElementById('update-{{$row4->id}}').submit()">
                                                        <i class="fa-solid fa-check"></i>
                                                    </button>
                                                    <form id="update-{{$row4->id}}"
                                                     action="{{Route('statusditerima',['id' => $row4->id])}}" class="hidden" method="post">
                                                    @method('put')
                                                    @csrf
                                                    </form>
                                                    <button type="button" class="btn btn-box btn-fixed-w btn-outline-danger mb-3" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fa-solid fa-xmark"></i></button>
                                                    <form id="update2-{{$row4->id}}"
                                                     action="{{Route('statusditolak',['id' => $row4->id])}}" class="hidden" method="post">
                                                    @method('put')
                                                    @csrf
                                                    </form>
                                                </td>

                                                <td>{{ $row4->pesanjurnal }}</td>
                                                    
                                                <td>{{ $row4->created_at}}</td>
                                                <td scope="row">
                                                    <a href="/tampiltambahjurnal/{{ $row4->id }}"
                                                        class="btn btn-social btn-box btn-social-outline-tw mb-3"><i
                                                        class="fa-sharp fa-solid fa-pen-to-square"></i></a>
                                                    </td>
                                                </tr>
                                        @endforeach
                                                
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
           
            <!-- Large modal -->
                    
                        <div class="col-lg-6 mt-4 stretched_card">                    
                            <div class="modal fade bd-example-modal-lg">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <form id="update3-{{$row4->id}}" action="{{Route('tolakpesan',['id' => $row4->id])}}" class="hidden"
                                         method="post">
                                        @method('put')
                                        @csrf
                                        <div class="modal-header">
                                            <h5 class="modal-title">Masukkan Alasan Kenapa Jurnal Ditolak !!</h5>
                                            <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <textarea type="text" name="pesanjurnal" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" placeholder="Masukkan Alasan"></textarea>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-box btn-fixed-w btn-outline-light mb-3" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-box btn-fixed-w btn-outline-danger mb-3">
                                            Submit
                                            </button>
                                            
                                        </div>
                                            @endif
                                        </form>

                                    </div>
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

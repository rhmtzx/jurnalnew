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
                        <h4 class="card_title">Edit Data Jurnal</h4>
                        <ul>
                            <!-- <li><h6>Seluruh Siswa Ada Disini</h6></li></ul> -->

                            <div class="single-table">
                                <div class="table-responsive">
                                   <div id="content" class="main-content">



                                    <form action="/updatetambahjurnal/{{ $data->id }}" method="POST" enctype="multipart\form-data" >

                                        @csrf

                                            <div class="mb-3">
                                                {{-- <label for="exampleInputEmail1" class="form-label"><h6>Nama Siswa</h6></label> --}}
                                                <input type="hidden" name="usersiswa" class="form-control form-control-lg input-rounded mb-4" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->usersiswa}}"
                                                readonly="">



                                            <div class="mb-3">
                                            {{-- <label for="exampleInputEmail1" class="form-label"><h6>Judul</h6></label> --}}
                                                <input type="hidden" name="judul" class="form-control form-control-lg input-rounded mb-4" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Isi Judul Jurnal" value="{{ $data->judul }}" readonly="">
                                            </div>


                                            <section style="padding-top:60px;" hidden>
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <label for="exampleInputEmail1" class="form-label"><h6>Deskripsi</h6></label>
                                                            <div class="col-lg-12 mt-4">
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                        <!-- <h4 class="card_title">Summernote Editor</h4> -->
                                                                        <textarea class="summer_note_editor" placeholder="Masukkan Deskripsi Jurnal" name="deskripsi" readonly="">{!! $data->deskripsi !!}</textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                                <div class="form-group">
                                                    <label class="col-form-label"><h6>Status Jurnal</h6></label>
                                                    <select class="form-control" id="statusjurnal" name="statusjurnal">
                                                        <option selected disabled="">- Pilih Status -</option>
                                                        <option value="Menunggu Persetujuan" {{ $data->statusjurnal == 'Menunggu Persetujuan' ? 'selected' : '' }}>Menunggu Persetujuan</option>
                                                        <option value="Telah Disetujui" {{ $data->statusjurnal == 'Telah Disetujui' ? 'selected' : 'Telah Disetujui' }}>Telah Disetujui
                                                        </option>
                                                        <option value="Jurnal Ditolak" {{ $data->statusjurnal == 'Jurnal Ditolak' ? 'selected' : 'Jurnal Ditolak' }}>Jurnal Ditolak
                                                        </option>
                                                    </select>
                                                </div>
                                                <div class="d-flex justify-content-between align-items-center mt-4">
                                                    @if($p->jobs->status_tugas == 'selesai')
                                                    <span class="text-dark-75 font-weight-bolder mr-2">Status:</span>
                                                    <a href="#" class="mb-2 ml-2 badge badge-success btn-sm font-weight-bold btn-upper btn-text mr-2">Selesai</a>
                                                    @elseif($p->jobs->status_tugas == 'pending')
                                                    <span class="text-dark-75 font-weight-bolder mr-2">Status:</span>
                                                    <a href="#" class="mb-2 ml-2 badge badge-warning btn-sm font-weight-bold btn-upper btn-text mr-2">Menunggu Acc</a>
                                                    @elseif($p->jobs->status_tugas == null)
                                                    <span class="text-dark-75 font-weight-bolder mr-2">Status:</span>
                                                    <a href="#" class="mb-2 ml-2 badge badge-danger btn-sm font-weight-bold btn-upper btn-text mr-2">pengerjaan</a>
                                                    @endif
                                                </div>


                                            {{-- <label for="exampleInputEmail1" class="form-label"><h6>Masukkan foto</h6></label> --}}
                                            <br><img class="img mb-3" hidden src="{{ asset('fotodudi/' . $data->foto) }}"
                                                alt="" style="width: 90px" alt="">
                                            <div class="input-group mb-3" hidden>
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Upload</span>
                                                </div>
                                                <div class="custom-file">
                                                    <input type="file" name="foto" class="custom-file-input" id="inputGroupFile01">
                                                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                                </div>
                                            </div>

                                            <button type="submit" class="btn btn-rounded btn btn-primary mb-3"><i class="ion-paper-airplane"></i>Update Data</button>
                                            <a href="/datatambahjurnal" class="btn btn-rounded btn-fixed-w btn-danger mb-3">Kembali</a>

                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Progress Table end -->
</div>
</div>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.12.1/datatables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#dataTables').DataTable();
    });
</script>
<script>
    tinymce.init({
        selector: '#mytextarea'
    });
  </script>

</body>

@endsection

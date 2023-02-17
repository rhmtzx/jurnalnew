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
                        <h4 class="card_title">Edit Data Absen</h4>
                        <ul>
                            <!-- <li><h6>Seluruh Siswa Ada Disini</h6></li></ul> -->

                            <div class="single-table">
                                <div class="table-responsive">
                                 <div id="content" class="main-content">



                                    <form action="/updateabsen/{{ $data->id }}" method="POST" enctype="multipart\form-data" >

                                        @csrf
                                            <div class="mb-3">
                                                {{-- <label for="exampleInputEmail1" class="form-label"><h6>Nama Siswa</h6></label> --}}
                                                <input type="text" hidden name="usersiswa" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->usersiswa}}"
                                                readonly="">
                                                <br>

                                                {{-- <label class="col-form-label"><h6>Keterangan :</h6></label> --}}
                                                <div class="custom-control custom-radio primary-radio" hidden>
                                                    <input type="radio" id="Hadir" name="keterangan" value="Hadir" class="custom-control-input" <?php if ($data['keterangan'] == 'Hadir'){ echo 'checked';
                            } ?>>
                                                    <label class="custom-control-label" for="Hadir">Hadir</label>
                                                </div>
                                                <div class="custom-control custom-radio primary-radio" hidden>
                                                    <input type="radio" id="Sakit" name="keterangan" value="Sakit" class="custom-control-input" <?php if ($data['keterangan'] == 'Sakit'){ echo 'checked';
                            } ?>>
                                                    <label class="custom-control-label" for="Sakit">Sakit</label>
                                                </div>
                                                <div class="custom-control custom-radio primary-radio" hidden>
                                                    <input type="radio" id="Izin" name="keterangan" value="Izin" class="custom-control-input" <?php if ($data['keterangan'] == 'Izin'){ echo 'checked';
                            } ?>>
                                                    <label class="custom-control-label" for="Izin">Izin</label>
                                                </div>


                                                <div class="form-group">
                                                    <label class="col-form-label"><h6>Status Jurnal</h6></label>
                                                    <select class="form-control" id="statusjurnal" name="statusjurnal">
                                                        <option selected disabled="">- Pilih Status -</option>
                                                        <option value="Menunggu Persetujuan" {{ $data->statusjurnal == 'Menunggu Persetujuan' ? 'selected' : '' }}>Menunggu Persetujuan</option>

                                                        <option value="Telah Disetujui" {{ $data->statusjurnal == 'Telah Disetujui' ? 'selected' : '' }}>Telah Disetujui</option>

                                                        <option value="Absen Ditolak" {{ $data->statusjurnal == 'Absen Ditolak' ? 'selected' : 'Absen Ditolak' }}>Absen Ditolak</option>
                                                    </select>
                                                </div>

                                                <div class="mb-1" hidden>
                                                    <label for="exampleInputEmail1" class="form-label"><h6>Edit Foto</h6></label>
                                                    <br><img class="img mb-3"src="{{ asset('fotodudi/' . $data->foto) }}"
                                                    alt="" style="width: 90px" alt="">
                                                    <br>
                                                    <input type="file" name="foto" class="form-control">
                                                </div>
                                                <br>
                                                <button type="submit" class="btn btn-primary">Submit Data</button>
                                                <a href="/dataabsen" class="btn btn-danger mb-10">Kembali</a>

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

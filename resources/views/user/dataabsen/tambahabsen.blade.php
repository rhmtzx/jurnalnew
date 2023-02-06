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
                        <h4 class="card_title">Tambah Data Absen</h4>
                        <ul>
                            <!-- <li><h6>Seluruh Siswa Ada Disini</h6></li></ul> -->
                            
                            <div class="single-table">
                                <div class="table-responsive">
                                 <div id="content" class="main-content">



                                    <form action="/insertabsen" method="POST" enctype="multipart\form-data" >
                                        @csrf
                                        <br>
                                        @if(Auth::user()->role == 'Siswa')     
                                        <div class="mb-3">
                                            <label class="col-form-label"><h6>Nama Siswa</h6></label>
                                            @foreach ( $data as $b)
                                            <input type="text" name="usersiswa" class="form-control form-control-lg input-rounded mb-4"
                                            id="exampleInputEmail1" readonly aria-describedby="emailHelp" placeholder="Halaman"
                                            value="{{ $b->namasiswa }}">
                                            @endforeach
                                            @error('usersiswa')
                                            <div class="text-danger">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                            
                                        @endif

                                <label class="col-form-label"><h6>Keterangan :</h6></label>
                                <div class="custom-control custom-radio primary-radio">
                                    <input type="radio" id="Hadir" name="keterangan" value="Hadir" class="custom-control-input">
                                    <label class="custom-control-label" for="Hadir">Hadir</label>
                                </div>
                                <div class="custom-control custom-radio primary-radio">
                                    <input type="radio" id="Sakit" name="keterangan" value="Sakit" class="custom-control-input">
                                    <label class="custom-control-label" for="Sakit">Sakit</label>
                                </div>
                                <div class="custom-control custom-radio primary-radio">
                                    <input type="radio" id="Izin" name="keterangan" value="Izin" class="custom-control-input">
                                    <label class="custom-control-label" for="Izin">Izin</label>
                                </div>
                                @error('keterangan')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <br>

                                            <!-- <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label"><h6>Keterangan</h6></label>
                                                <input type="text" name="keterangan" class="form-control form-control-lg input-rounded mb-4" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Isi Keterangan">
                                            </div>
                                            @error('keterangan')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                            <br> -->

                                            <!-- <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label"><h6>Status Jurnal</h6></label>
                                                <input type="text" name="statusjurnal" class="form-control form-control-lg input-rounded mb-4" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Isi Status Jurnal">
                                            </div> -->
                                            @if(Auth::user()->role == 'Siswa')     
                                            <div class="form-group">
                                                <label class="col-form-label"><h6>Status Jurnal</h6></label>
                                                <select class="form-control" id="statusjurnal" name="statusjurnal">
                                                    <option selected disabled="">- Pilih Status -</option>
                                                    <option value="Menunggu Persetujuan">Menunggu Persetujuan</option>
                                                    <!-- <option value="Telah Disetujui">Telah Disetujui</option> -->
                                                </select>
                                            </div>
                                            @endif

                                            @error('statusjurnal')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                            <br>

                                            <label for="exampleInputEmail1" class="form-label"><h6>Masukkan Foto</h6></label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Upload</span>
                                                </div>
                                                <div class="custom-file">
                                                    <input type="file" name="foto" class="custom-file-input" id="inputGroupFile01">
                                                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                                    
                                                </div>
                                            </div>
                                            <a for="exampleInputEmail1" class="form-label"><em>Info : Abaikan Jika Tidak Sakit Atau Izin !!</em></a>
                                            <br>
                                            <br>
                                            <button type="submit" class="btn btn-rounded btn-fixed-w btn-primary mb-3"><i class="ion-paper-airplane"></i>Submit</button>
                                            <a href="/dataabsen" class="btn btn-rounded btn-fixed-w btn-danger mb-3">Kembali</a>
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
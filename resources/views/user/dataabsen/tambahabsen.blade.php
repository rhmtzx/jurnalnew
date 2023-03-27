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
                                 
                                    <form action="/insertabsen" method="POST" enctype="multipart/form-data" >
                                        @csrf
                                        <br>

                                        <div class="mb-3">
                                            {{-- <label class="col-form-label"><h6>Nama Siswa</h6></label> --}}
                                            @foreach ( $data as $b)
                                            <input type="hidden" name="usersiswa" class="form-control form-control-lg input-rounded mb-4"
                                            id="exampleInputEmail1" readonly aria-describedby="emailHelp" placeholder="Halaman"
                                            value="{{ $b->id }}">
                                            @endforeach
                                            @error('usersiswa')
                                            <div class="text-danger">
                                                {{ $message }}
                                            </div>
                                            @enderror

                                            <div class="mb-3">
                                                <label class="col-form-label"><h6>Nama Siswa</h6></label>
                                                @foreach ( $data as $c)
                                                <input type="text" name="" class="form-control form-control-lg input-rounded mb-4"
                                                id="exampleInputEmail1" readonly aria-describedby="emailHelp" placeholder="Halaman"
                                                value="{{ $c->namasiswa }}">
                                                @endforeach
                                                @error('usersiswa')
                                                <div class="text-danger">
                                                    {{ $message }}
                                                </div>
                                                @enderror



                                <label class="col-form-label"><h6>Keterangan :</h6></label>
                                <div class="custom-control custom-radio primary-radio">
                                    <input type="radio" id="Izin" name="keterangan" value="Izin" class="custom-control-input">
                                    <label class="custom-control-label" for="Izin">Izin</label>
                                </div>

                                <div class="custom-control custom-radio primary-radio">
                                    <input type="radio" id="Sakit" name="keterangan" value="Sakit" class="custom-control-input">
                                    <label class="custom-control-label" for="Sakit">Sakit</label>
                                </div>
                                @error('keterangan')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <br>
                                            <div class="mb-3">
                                                <input type="hidden" class="form-control form-control-lg input-rounded mb-4" name="statusjurnal" type="text" placeholder="Masukan Status Jurnal">
                                            </div>


                                            <div class="mb-1">
                                                <label for="exampleInputEmail1" class="form-label"><h6>Masukkan foto</h6>
                                                </label>
                                                <br>
                                                <input type="file" name="foto" class="form-control">
                                                @error('foto')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <a for="exampleInputEmail1" class="form-label">
                                            <br>
                                            <br>
                                            <button type="submit" class="btn btn-rounded btn btn-primary mb-3"><i class="ion-paper-airplane"></i>Submit Data</button>
                                            <a href="/dataabsen" class="btn btn-rounded btn-fixed-w btn-danger mb-3"><i class="ion-ios-undo"></i>Kembali</a>
                                        </form>

                                    
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

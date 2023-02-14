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
                        <h4 class="card_title">Tambah Data Jurnal</h4>
                        <ul>
                            <!-- <li><h6>Seluruh Siswa Ada Disini</h6></li></ul> -->

                            <div class="single-table">
                                <div class="table-responsive">
                                   <div id="content" class="main-content">



                                    <form action="/inserttambahjurnal" method="POST" enctype="multipart\form-data" >
                                        @csrf
                                        <div class="mb-3">
                                            {{-- <label for="exampleInputEmail1" class="form-label">Nama Siswa</label> --}}
                                            @foreach ( $data as $b)
                                            {{-- @dd($b); --}}
                                            <input type="hidden" name="usersiswa" class="form-control form-control-lg input-rounded mb-4"
                                            id="exampleInputEmail1" readonly aria-describedby="emailHelp" placeholder="Halaman"
                                            value="{{ $b->id }}">
                                            @endforeach
                                            @error('namasiswa')
                                            <div class="text-danger">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Nama Siswa</label>
                                                @foreach ( $data as $c)
                                                {{-- @dd($b); --}}
                                                <input type="text" name="" class="form-control form-control-lg input-rounded mb-4"
                                                id="exampleInputEmail1" readonly aria-describedby="emailHelp" placeholder="Halaman"
                                                value="{{ $c->namasiswa }}">
                                                @endforeach
                                                @error('namasiswa')
                                                <div class="text-danger">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            <br>
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label"><h6>Judul</h6></label>
                                                <input class="form-control form-control-lg input-rounded mb-4" name="judul" type="text" placeholder="Masukan Judul">
                                            </div>
                                            @error('judul')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                            <section style="padding-top:60px;">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <label for="exampleInputEmail1" class="form-label"><h6>Deskripsi</h6></label>
                                                            <div class="col-lg-12 mt-4">
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                        <!-- <h4 class="card_title">Summernote Editor</h4> -->
                                                                        <textarea class="summer_note_editor" placeholder="Masukkan Deskripsi Jurnal" name="deskripsi"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                            @error('deskripsi')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                            <br>
                                            <br>
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
                                            <br>
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label"><h6>Masukkan Foto </h6></label>
                                                <br>
                                                <input type="file" name="foto" class="form-control" >
                                            </div>
                                            <br>
                                            <br>
                                            <button type="submit" class="btn btn-rounded btn btn-primary mb-3"><i class="ion-paper-airplane"></i>Submit Data</button>
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

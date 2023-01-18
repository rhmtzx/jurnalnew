    <!doctype html>
    <html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <title>DATA JURNAL</title>
    </head>

    <body>
        <div class="page-content-wrapper">
          <div class="justify-content-center">
            <div class="row-2">
              <div class="col-12 col-lg-12">
                <div class="card-body">
                  <div class="container">

                    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                      <div class="breadcrumb-title pe-3">Sekolah</div>
                      <div class="ps-3">
                        <nav aria-label="breadcrumb" >
                          <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="/"><i class="bx bx-archive icon-color-6"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Data Jurnal</li>
                          </ol>
                        </nav>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-body">
                        <div>
                            <h2 class="text-center mb-4">EDIT JURNAL</h2>
                          <hr>
                            <form action="/updatetambahjurnal/ {{ $data->id }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Judul</label>
                                    <input type="text" name="judul" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Nis Siswa" value="{{ $data->judul }}">
                                    @error('nissiswa')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                    <br>
                                    <section style="padding-top:60px;">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <br>Deskripsi
                                                    <div class="card">
                                                        <div class="card-header">
                                                        </div>
                                                        <div class="card-body">
                                                            {{--  <form method="POST" enctype="multipart/form-data">  --}}
                                                            <textarea name="deskripsi" id="mytextarea"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    @error('deskripsi')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                    <br>
                                        <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">User Siswa</label>
                                    <input type="text" name="usersiswa" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Jurusan" value="{{ $data->usersiswa }}">
                                    @error('usersiswa')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                    <br>
                                     <div class="mb-1">
                                                    <label for="exampleInputEmail1" class="form-label">Masukkan Foto</label>
                                                    <br><img class="img mb-3"src="{{ asset('fotodudi/' . $data->foto) }}"
                                                        alt="" style="width: 90px" alt="">
                                                    <input type="file" name="foto" class="form-control">
                                                </div>
                                            <br>
                                                <div class="mt-4">
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                    <a href="/datatambahjurnal" class="btn btn-danger waves-effect waves-light mb-10">Kembali</a>
                                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
            integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
            integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
        </script>
        -->
    </body>

    </html>

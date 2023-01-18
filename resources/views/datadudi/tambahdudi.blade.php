 @extends('layout.main')
 @section('content')

    <!doctype html>
    <html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <title>CRUD LARAVEL</title>
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
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-archive icon-color-6"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Data Dudi</li>
                          </ol>
                        </nav>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-body">
                        <div>
                            <h2 class="text-center mb-4">TAMBAH DATA DUDI</h2>
                                        <hr>
                            <form action="/insertdatadudi" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Nama DuDi</label>
                                    <input type="text" name="namadudi" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Nama DuDi">
                                    @error('namadudi')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                    <br>
                                    <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Nama Kepala Direktur</label>
                                    <input type="text" name="namakepdik" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Nama Kepala Direktur">
                                    @error('namakepdik')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                    <br>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Nama Data Pembimbing</label>
                                        <input type="text" name="namadatapembimbing" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" placeholder="Nama Data Pembimbing">
                                        @error('namadatapembimbing')
                                            <div class="text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                        <br>
                                        <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Alamat DuDi</label>
                                    <input type="text" name="alamatdudi" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Alamat DuDi">
                                    @error('alamatdudi')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                    <br>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Email DuDi</label>
                                        <input type="email" name="emaildudi" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" placeholder="Email DuDi">
                                        @error('emaildudi')
                                            <div class="text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                        <br>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Persyaratan</label>
                                            <input type="text" name="persyaratan" class="form-control" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" placeholder="Persyaratan">
                                            @error('persyaratan')
                                                <div class="text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                            <br>
                                            <div class="mb-1">
                                                    <label for="exampleInputEmail1" class="form-label">Masukkan Foto</label>
                                                    <input type="file" name="foto" class="form-control">
                                                </div>
                                                <div class="mt-4">
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                    <a href="/datadudi" class="btn btn-danger waves-effect waves-light mb-10">Kembali</a>
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
    @endsection

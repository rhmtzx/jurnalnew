@extends('layout.main')

@section('content')

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>TAMBAH SISWA MAGANG</title>
</head>
<body>
    
    <div class="page-content-wrapper">
    <div class="justify-content-center">
      <div class="row-2">
        <div class="col-12 col-lg-12">
            <div class="card-body">
                <div class="container">
                    <div class="row" > 

                <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                    <div class="breadcrumb-title pe-3">DATA DUDI</div>
                        <div class="ps-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0">
                                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-grid-alt"></i></a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">TAMBAH SISWA MAGANG</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                        <div class="card">
                            <div class="card-body">
                                <div>
                                    <h4><em>TAMBAH SISWA MAGANG</em></h4>
                                    <hr>
                                            <form action="/insertsiswamagang" method="POST" enctype="multipart\form-data" >

                                                @csrf

                                                


                                                <div class="mb-3">
                                                    <label for="exampleInputEmail1" class="form-label"><h5>Id Siswa</h5></label>
                                                    <input type="number" name="id_siswasm" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Isi Id Siswa">
                                                </div>
                                                @error('id_siswasm')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                                <br>
                                                <div class="mb-3">
                                                    <label for="exampleInputEmail1" class="form-label"><h5>Id Dudi</h5></label>
                                                    <input type="number" name="id_dudism" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Isi Id Dudi">
                                                </div>
                                                @error('id_dudism')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                                <br>
                                                <button type="submit" class="btn btn-primary">Submit Siswa Magang</button>
                                                <a href="/siswamagang" class="btn btn-danger mb-10">Kembali</a>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div></div></div>




            <!-- Optional JavaScript; choose one of the two! -->

            <!-- Option 1: Bootstrap Bundle with Popper -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

            <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
-->
</body>
</html>

@endsection
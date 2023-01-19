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

    <title>EDIT DATA SISWA</title>
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
                    <div class="breadcrumb-title pe-3">DATA SEKOLAH</div>
                        <div class="ps-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0">
                                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-grid-alt"></i></a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">EDIT SISWA</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                        <div class="card">
                            <div class="card-body">
                                <div>
                                    <h4><em>EDIT SISWA</em></h4>
                                    <hr>                        <form action="/updatedatasiswa/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nis Siswa</label>
                                <input type="number" name="nissiswa" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Nis Siswa" value="{{ $data->nissiswa }}">
                                @error('nissiswa')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <br>
                                <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nama Siswa</label>
                                <input type="text" name="namasiswa" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Nama Siswa" value="{{$data->namasiswa}}">
                                @error('namasiswa')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <br>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Kelas</label>
                                    <input type="text" name="kelas" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Kelas" value="{{ $data->kelas }}">
                                    @error('kelas')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                    <br>
                                                <div class="mb-3">
                                                    <label for="exampleInputEmail1" class="form-label"><h5>Jurusan</h5></label>
                                                    <select class="form-control" name="jurusan" id="jurusan">
                                                        <option value="" selected disabled>Pilih</option>
                                                        @foreach($jurusan as $a)
                                                        <option value="{{ $a->id }}"<?php if($data->jurusan == $a->id) {
                                                            echo 'selected';    
                                                        }?> > {{ $a->namajurusan }} </option><!--  <--- Tergantung Variabel Database -->
                                                        @endforeach
                                                    </select>
                                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Alamat Siswa</label>
                                    <input type="text" name="alamatsiswa" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Alamat Siswa" value="{{ $data->alamatsiswa }}">
                                    @error('alamatsiswa')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                    <br>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">No Telepon</label>
                                        <input type="text" name="notlpsiswa" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" placeholder="No Telepon Siswa" value="{{ $data->notlpsiswa }}">
                                        @error('notlpsiswa')
                                            <div class="text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                        <br>
                                        <!-- <div class="mb-1">
                                                <label for="exampleInputEmail1" class="form-label">Masukkan Foto</label>
                                                <br><img class="img mb-3"src="{{ asset('fotodudi/' . $data->foto) }}"
                                                        alt="" style="width: 90px" alt="">
                                                <input type="file" name="foto" class="form-control">
                                            </div> -->
                                            <div class="mt-4">
                                                <button type="submit" class="btn btn-primary">Edit Data Siswa</button>
                                                <a href="/datasiswa" class="btn btn-danger waves-effect waves-light mb-10">Kembali</a>
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
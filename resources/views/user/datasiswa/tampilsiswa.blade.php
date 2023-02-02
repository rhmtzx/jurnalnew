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
                            <h4 class="card_title">Edit Data Siswa</h4>
                            <ul>
                            <!-- <li><h6>Seluruh Siswa Ada Disini</h6></li></ul> -->
                            
                            <div class="single-table">
                                <div class="table-responsive">
                                     <div id="content" class="main-content">
                

                    
                                <form action="/updatedatasiswa/{{ $data->id }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <br>
                                    <label for="exampleInputEmail1" class="form-label"><h6>NIS</h6></label> 
                                    <input type="number" name="nissiswa" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" value="{{ $data->nissiswa }}">
                                    <!-- <br> -->
                                    
                                    
                                <div class="mb-3">
                                    <br>
                                    <label for="exampleInputEmail1" class="form-label"><h6>Nama Siswa</h6></label> 
                                    <input type="text" name="namasiswa" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" value="{{ $data->namasiswa }}">
                                    <!-- <br> -->
                                    
                                    
                                <div class="mb-3">
                                    <br>
                                    <label for="exampleInputEmail1" class="form-label"><h6>Kelas Siswa</h6></label> 
                                    <input type="text" name="kelas" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" value="{{ $data->kelas }}">
                                    <!-- <br> -->
                                   
                                    
                                <div class="mb-3">
                                    <br>
                                    <label for="exampleInputEmail1" class="form-label"><h6>Jurusan Siswa</h6></label> 
                                    <input type="text" name="jurusan" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" value="{{ $data->jurusan }}">
                                    <!-- <br> -->
                                   
                                    
                                <div class="mb-3">
                                    <br>
                                    <label for="exampleInputEmail1" class="form-label"><h6>Alamat Siswa</h6></label> 
                                    <input type="text" name="alamatsiswa" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" value="{{ $data->alamatsiswa }}">
                                    <!-- <br> -->
                                    
                                    
                                <div class="mb-3">
                                    <br>
                                    <label for="exampleInputEmail1" class="form-label"><h6>No Telepon Siswa</h6></label> 
                                    <input type="text" name="notlpsiswa" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" value="{{ $data->notlpsiswa }}">
                                    <!-- <br> -->
                                    
                                    
                                    <div class="mt-4">
                                        <button type="submit" class="btn btn-primary">Edit Data</button>
                                        <a href="/datasiswa" class="btn btn-danger waves-effect waves-light mb-10">Kembali</a>
                                    </div>
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

</body>

@endsection
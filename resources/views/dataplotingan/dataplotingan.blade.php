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
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.12.1/datatables.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"
            integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <title>DATA PLOTINGAN DUDI</title>
    </head>

    <body>
    <div class="content-wrapper">
    <div class="container-full">
      <div class="content-header">
          <div class="d-flex align-items-center">
              <div class="me-auto">
                  <h4 class="page-title">Data Siswa</h4>
                  <div class="d-inline-block align-items-center">
                      <nav>
                          <!-- <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                              <li class="breadcrumb-item" aria-current="page">Sample Page</li>
                              <li class="breadcrumb-item active" aria-current="page">Data Siswa</li>
                          </ol> -->
                      </nav>
                  </div>
              </div>
              
          </div>
      </div>

      <section class="content">
        <div class="row">
            <h1 class="text-center">Data Plotingan Dudi</h1>
            <br>
            <div class="row-2">
                <div class="container-fluid">
                    <div class="justify-content-center"></div>
                    <div class="col-xl-12">
                        <div class="card mt-5">
                            <div class="card-body">
                                <div class="container">
                                    <a href="/tambahdataplotingan" class="btn btn-success mb-3"><i class="fa-solid fa-plus"></i></a>
                                    <!--@if ($message = Session::get('succes'))
    <div class="alert alert-success" role="alert">
                                    {{ $message }}
                                </div>
    @endif-->
                                    <table id="datatable" class="table text-center table-bordered dt-responsive nowrap"
                                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Id Guru</th>
                                                <th scope="col">Nis Siswa</th>
                                                <th scope="col">Id Dudi</th>
                                                <th scope="col">Dibuat</th>
                                                <th scope="col">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $no = 1;
                                            @endphp
                                            @foreach ($data as $row)
                                                <tr>
                                                    <th scope="row">{{ $no++ }}</th>
                                                    <td>{{ $row->id_gurupem }}</td>
                                                    <td>{{ $row->nissiswa }}</td>
                                                    <td>{{ $row->id_dudi }}</td>
                                                    <td>{{ $row->created_at}}</td>
                                                    <td scope="row">
                                                        <a href="/tampildataplotingan/{{ $row->id }}"
                                                            class="btn btn-warning"><i
                                                                class="fa-sharp fa-solid fa-pen-to-square"></i></a>
                                                        <a href="#" class="btn btn-danger deletedataplotingan"
                                                            data-id="{{ $row->id }}"
                                                             data-nissiswa="{{ $row->nissiswa }}"><i
                                                                class="fa-sharp fa-solid fa-trash"></i></a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
        </div>
        </div>
      </section>
      <!-- /.content -->
    
    </div>
</div>
        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.1.min.js"
            integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
        <script type="text/javascript" src="https://cdn.s.net/v/dt/dt-1.12.1/datatables.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
            integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script>
            $(document).ready(function() {
                $('#example').DataTable();
            });
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
    <script>
        $('.deletedataplotingan').click(function() {
            var pegawaiid = $(this).attr('data-id');
            var nama = $(this).attr('data-nama');
            swal({
                    title: "Yakin Ingin Menghapus?",
                    text: "Kamu Yakin Akan Menghapus Data Ini",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        window.location = "/deletedataplotingan/" + pegawaiid + ""
                        swal("Data berhasil di hapus", {
                            icon: "success",
                        });
                    } else {
                        swal("Data tidak jadi di hapus");
                    }
                });
        });
    </script>
    <script>
        @if (Session::has('succes'))
            toastr.success("{{ Session::get('succes') }}");
        @endif
    </script>
    </html>
@endsection


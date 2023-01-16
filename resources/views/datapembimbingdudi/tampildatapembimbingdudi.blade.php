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

	<title>SEVENTABLE</title>
</head>
<body>
	<div class="page-content-wrapper">
		<div class="justify-content-center">
			<div class="row-2">
				<div class="col-12 col-lg-12">
					<div class="card-body">

						<div class="container">
							<div class="row justify-content-center">
								<div class="col-12">
									<div class="card">
										<div  class="card-body">
											<h2 class="text-center mb-4">UPDATE DATA BARANG</h2>
											<br>
											<form action="/updatedatabarang/{{ $data->id }}" method="POST" enctype="multipart/form-data" >
												@csrf

												
												<div class="mb-3">
													<label for="exampleInputEmail1" class="form-label"><h5>Kode Barang</h5></label>
													<input type="text" name="kodebarang" readonly="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->kodebarang }}">
												</div>
												@error('kodebarang')
												<div class="alert alert-danger">{{ $message }}</div>
												@enderror

												
												<div class="mb-3">
													<label for="exampleInputEmail1" class="form-label"><h5>Nama Barang</h5></label>
													<input type="text" name="namabarang" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->namabarang }}">
												</div>
												@error('namabarang')
												<div class="alert alert-danger">{{ $message }}</div>
												@enderror

												<div class="mb-3">
													<label for="exampleInputEmail1" class="form-label"><h5>Merk Barang</h5></label>
													<input type="text" name="merk" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->merk }}">
												</div>
												@error('merk')
												<div class="alert alert-danger">{{ $message }}</div>
												@enderror

												<div class="mb-3">
													<label for="exampleInputEmail1" class="form-label"><h5>Kategori</h5></label>
													<select class="form-control" name="kategori_id" id="kategori_id">
														<option value="" selected disabled>Pilih</option>
														@foreach($datas as $a)
														<option value="{{ $a->id }}"<?php if($data->kategori_id == $a->id) {
															echo 'selected';	
														}?> > {{ $a->kategori }} </option>
														@endforeach
													</select>
												</div>


												<div class="mb-3">
													<label for="exampleInputEmail1" class="form-label"><h5>Stok Barang</h5></label>
													<input type="number" name="stok" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->stok }}">
												</div>
												@error('stok')
												<div class="alert alert-danger">{{ $message }}</div>
												@enderror

												<label for=""><h5>Harga Barang</h5></label>
												<div class="input-group mb-3"> <span class="input-group-text">Rp.</span>
													<input type="number" class="form-control" name="hargabarang" aria-label="Amount (to the nearest dollar)" value="{{ $data->hargabarang }}">							
												</div>
												@error('hargabarang')
												<div class="alert alert-danger">{{ $message }}</div>
												@enderror

												<label for=""><h5>Harga Jual</h5></label>
												<div class="input-group mb-3"> <span class="input-group-text">Rp.</span>
													<input type="number" class="form-control" name="hargajual" aria-label="Amount (to the nearest dollar)" value="{{ $data->hargajual }}"> 
												</div>
												@error('hargajual')
												<div class="alert alert-danger">{{ $message }}</div>
												@enderror

												<!-- FOTO -->
												<div class="mb-3">
													<label for="foto" class="form-check-labell"><h5>Masukkan Foto Baru</h5></label>
													<br><img class="img mb-3" src="{{ asset('fotobarang/'.$data->foto) }}" 
													alt="" style="width:80px"></br>
													<input type="file" name="foto" class="form-control" >
												</div>

												<button type="submit" class="btn btn-primary">Update Barang</button>
												<a href="/barang" class="btn btn-danger mb-10">Kembali</a>
												
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>




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
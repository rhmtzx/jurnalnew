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
											<h2 class="text-center mb-4">TAMBAH DATA BARANG</h2>
											<br>
											<form action="/insertdatabarang" method="POST" enctype="multipart\form-data" >

												@csrf
												<div class="mb-3">
													<label for="exampleInputEmail1" class="form-label"><h5>Kode Barang</h5></label>
													<input type="text" name="kodebarang" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="KB1">
												</div>
												@error('kodebarang')
												<div class="alert alert-danger">{{ $message }}</div>
												@enderror

												<div class="mb-3">
													<label for="exampleInputEmail1" class="form-label"><h5>Nama Barang</h5></label>
													<input type="text" name="namabarang" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Laptop HP Intel Core I3">
												</div>
												@error('namabarang')
												<div class="alert alert-danger">{{ $message }}</div>
												@enderror

												<div class="mb-3">
													<label for="exampleInputEmail1" class="form-label"><h5>Merk Barang</h5></label>
													<input type="text" name="merk" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="HP">
												</div>
												@error('merk')
												<div class="alert alert-danger">{{ $message }}</div>
												@enderror

												<!-- <div class="mb-3">
													<label for="exampleDataList" class="form-label"><h5>Kategori</h5></label>
													<input class="form-control" list="datalistOptions" name="kategori_id" id="kategori_id" placeholder="Type to search category...">
													<datalist id="datalistOptions">
														@foreach($datas as $a)
														<option value="{{ $a->id }}">{{ $a->kategori }}</option>
														@endforeach
													</datalist>
												</div> -->
												<div class="mb-3">
													<label for="exampleInputEmail1" class="form-label"><h5>Kategori</h5></label>
													<select class="form-control" name="kategori_id" id="kategori_id">
														<option value="" selected disabled>Pilih Kategori</option>
														@foreach($datas as $hi)
														<option value="{{ $hi->id }}">{{ $hi->kategori }}</option>
														@endforeach
													</select>
												</div>
												@error('kategori_id')
												<div class="alert alert-danger">{{ $message }}</div>
												@enderror
												

												<div class="mb-3">
													<label for="exampleInputEmail1" class="form-label"><h5>Stok Barang</h5></label>
													<input type="number" name="stok" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="100">
												</div>
												@error('stok')
												<div class="alert alert-danger">{{ $message }}</div>
												@enderror

												<label for=""><h5>Harga Barang</h5></label>
												<div class="input-group mb-3"> <span class="input-group-text">Rp.</span>
													<input type="number" class="form-control" name="hargabarang" aria-label="Amount (to the nearest dollar)" placeholder="100000"> 
												</div>
												@error('hargabarang')
												<div class="alert alert-danger">{{ $message }}</div>
												@enderror

												<label for=""><h5>Harga Jual</h5></label>
												<div class="input-group mb-3"> <span class="input-group-text">Rp.</span>
													<input type="number" class="form-control" name="hargajual" aria-label="Amount (to the nearest dollar)" placeholder="200000">
												</div>
												@error('hargajual')
												<div class="alert alert-danger">{{ $message }}</div>
												@enderror

												<div class="mb-3">
													<label for="exampleInputEmail1" class="form-label"><h5>Masukkan Foto</h5></label>
													<input type="file" name="foto" class="form-control" >
												</div>
												@error('foto')
												<div class="alert alert-danger">{{ $message }}</div>
												@enderror




												<button type="submit" class="btn btn-primary">Submit Data Barang</button>
												<a href="/barang" class="btn btn-danger mb-10">Kembali</a>

											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div></div></div></div></div>




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
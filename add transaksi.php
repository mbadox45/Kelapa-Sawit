<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>tambah transaksi</title>
	<!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="container" style="padding-top: 2rem;">
	<h2>Form Tambah Transaksi</h2>
	<form action="add transaksi.php" method="post">
		<div class="mb-3">
			<label>kode</label>
			<input type="text" name="kode" class="form-control">
		</div>
		<div class="mb-3">
			<label>nama</label>
			<input type="text" name="nama" class="form-control">
		</div>
		<div class="mb-3">
			<label>NamaBarang</label>
			<input type="text" name="NamaBarang" class="form-control">
		</div>
		<div class="mb-3">
			<label>HargaSatuan</label>
			<input type="number" name="HargaSatuan" class="form-control">
		</div>
		<div class="mb-3">
			<label>Vol</label>
			<input type="number" name="Vol" class="form-control">
		</div>
		<div class="mb-3">
			<label>Diskon</label>
			<input type="number" name="Diskon" class="form-control">
		</div>
		<div >
		<input type="submit" name="Submit" class="btn btn-success">
		<a href="data transaksi.php"><button type="button" style="margin-left:3px;" class="btn btn-secondary">Kembali</button></a>
		</div>
	</form>
	<?php
	if (isset($_POST['Submit'])) {
		$kode=$_POST['kode'];
		$nama=$_POST['nama'];
		$NamaBarang=$_POST['NamaBarang'];
		$HargaSatuan=$_POST['HargaSatuan'];
		$Vol=$_POST['Vol'];
		$Diskon=$_POST['Diskon'];
		if (!$kode || !$nama || !$NamaBarang || !$HargaSatuan || !$Vol || !$Diskon) {
			echo '<div class="alert alert-danger" role="alert"> Harap semua diisi ! </div>';
		}else{

		include_once("config.php");



		$result = mysqli_query($mysqli, "INSERT INTO transaksi(kode, nama, NamaBarang, HargaSatuan, Vol, Diskon) VALUES('$kode','$nama','$NamaBarang', '$HargaSatuan', '$Vol', '$Diskon')");

		header('Location: index.php');
	}
	}
	?>
	<!-- Option 1: Bootstrap Bundle with Popper -->
    	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>tambah produk</title>
	<!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="container" style="padding-top: 2rem;">
	<h2>Form Tambah Produk</h2>
	<form action="tambah produk.php" method="post">
		<div class="mb-3">
			<label>Nama Produk</label>
			<input type="text" name="nama_produk" class="form-control">
		</div>
		<div class="mb-3">
			<label>Harga</label>
			<input type="number" name="harga" class="form-control">
		</div>
		<div class="mb-3">
			<input type="submit" name="Submit" value="Add" class="btn btn-success">
			<a href="index.php"><button type="button" style="margin-left:3px;" class="btn btn-secondary">Kembali</button></a>
		</div>
	</form>
	<?php
	if (isset($_POST['Submit'])) {
		$nama_produk=$_POST['nama_produk'];
		$harga=$_POST['harga'];
		if (!$nama_produk || !$harga) {
			echo '<div class="alert alert-danger" role="alert"> Harap semua diisi ! </div>';
		} else {
			include_once("config.php");

			$result = mysqli_query($mysqli, "INSERT INTO tbl_produk(nama_produk, harga) VALUES('$nama_produk','$harga')");

			header('Location: index.php');

		}

	}
	?>
	<!-- Option 1: Bootstrap Bundle with Popper -->
    	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
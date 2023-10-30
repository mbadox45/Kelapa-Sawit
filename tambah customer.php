<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tambah Customer</title>
	<!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="container" style="padding-top: 2rem;">
	<h2>Form Tambah Customer</h2>
	<form action="tambah customer.php" method="post">
		<div class="mb-3">
			<label>Customer</label>
			<input type="text" name="customer" class="form-control">
		</div>
		<div class="mb-3">
			<label>Alamat</label>
			<input type="text" name="alamat" class="form-control">
		</div>
		<div class="mb-3">
			<label>No Telp.</label>
			<input type="number" name="no_telp" class="form-control">
		</div>
		<div class="mb-3">
			<label>Email</label>
			<input type="email" name="email" class="form-control">
		</div>
		<div class="mb-3">
		<input type="submit" name="Submit" value="Simpan" class="btn btn-success" >
		<a href="data customer.php"><button type="button" style="margin-left:3px;" class="btn btn-secondary">Kembali</button></a>
		</div>
	</form>
	<?php
	if (isset($_POST['Submit'])) {
		$customer=$_POST['customer'];
		$alamat=$_POST['alamat'];
		$no_telp=$_POST['no_telp'];
		$email=$_POST['email'];

		if (!$customer || !$alamat || !$no_telp || !$email) {
			echo '<div class="alert alert-danger" role="alert"> Harap semua diisi ! </div>';
		}else{

		include_once("config.php");

		$result = mysqli_query($mysqli, "INSERT INTO tbl_customer(customer, alamat, no_telp, email) VALUES('$customer','$alamat', '$no_telp', '$email')");

		header('Location: data costumer.php');
		}
	}
	?>
	<!-- Option 1: Bootstrap Bundle with Popper -->
    	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
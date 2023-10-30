<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Hallo</title>
		
		<!-- Bootstrap CSS -->
    	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	</head>
	<body class="container-fluid" style="padding-top: 2rem;">
		<?php 
			require('menu.php');
		?>
		<?php
		// Create database connection using config file
		include_once("config.php");
		 
		// Fetch all users data from database
		$result = mysqli_query($mysqli, "SELECT * FROM tbl_produk");
		?>
		<h3 class="my-3">Tabel produk</h3>
		<div class="my-3">
		<a href="tambah produk.php" class="btn btn-info"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-plus" viewBox="0 0 16 16">
			<path d="M8.5 6a.5.5 0 0 0-1 0v1.5H6a.5.5 0 0 0 0 1h1.5V10a.5.5 0 0 0 1 0V8.5H10a.5.5 0 0 0 0-1H8.5V6z"/>
			<path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1z"/> </svg> Add Produk</a>
			
		</div>
		<table border="1" class="table table-striped"> 
			<thead>
				<tr>
					<th>Nama Produk</th>
					<th>Harga</th>
					<th width="10%">Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php
				foreach ($result as $produk) : 

				?>
				<tr>
					<td><?php echo $produk['nama_produk']; ?></td>
					<td><?php echo $produk['harga']; ?></td>
					<td><button class="btn btn-warning">Edit</button><button style="margin-left: 3px;" class="btn btn-danger">delete</button></td>
				</tr>
			<?php endforeach;?>
			</tbody>
		</table>

		<!-- Option 1: Bootstrap Bundle with Popper -->
    	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	</body>
</html>
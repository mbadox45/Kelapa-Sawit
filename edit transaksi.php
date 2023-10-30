<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>edit transaksi</title>
</head>
<body>
	<?php 
		include_once("config.php");
		$id_transaksi = $_GET['id_transaksi'];
		// echo $id_transaksi;
		$view_data = mysqli_query($mysqli, "SELECT * FROM tbl_transaksi WHERE id_transaksi=".$id_transaksi);

		$customer = mysqli_query($mysqli, "SELECT * FROM tbl_customer");
		$produk = mysqli_query($mysqli, "SELECT * FROM tbl_produk");
		while ($data = mysqli_fetch_array($view_data)) {
	?>
	<h2>form edit transaksi</h2>
	<form action="tambah transaksi.php" method="post">
		<div>
			<label>tgl_transaksi</label>
			<input type="date" name="tgl_transaksi" value="<?= date("Y-m-d",new DateTime($data['tgl_transaksi']));?>">
		</div>
		<div>
			<label>nama_produk</label>
			<select name="id_produk">
				<option value="">--- Choose a produk ---</option>
				<?php foreach ($produk as $list_produk): ?>
				<option value="<?php echo $list_produk['id_produk'];?>"><?php echo $list_produk['nama_produk'];?></option>
				<?php endforeach;?>
			</select>
		</div>
		<div>
			<label>quantity</label>
			<input type="number" name="quantity" value="<?php echo $data['quantity'];?>">
		</div>
		<div>
			<label>customer</label>
			<select name="id_customer">
				<option value="">--- Choose a produk ---</option>
				<?php foreach ($customer as $list_customer): ?>
				<option value="<?php echo $list_customer['id_customer'];?>"><?php echo $list_customer['customer'];?></option>
				<?php endforeach;?>
			</select>
		</div>
		<div>
			<input type="submit" name="Submit" value="Add">
			<a href="data transaksi.php"><button type="button">Kembali</button></a>
		</div>
	</form>
	<?php
	}
	if (isset($_POST['Submit'])) {
		$tgl_transaksi=$_POST['tgl_transaksi'];
		$id_produk=$_POST['id_produk'];
		$quantity=$_POST['quantity'];
		$id_customer=$_POST['id_customer'];
		$add_date=date("Y-m-d h:i:s");
		$update_date=date("Y-m-d h:i:s");
		if (!$tgl_transaksi || !$id_produk || !$quantity || !$id_customer) {
			echo "Tidak boleh kosong";

		}else{

		include_once("config.php");

		$result = mysqli_query($mysqli, "INSERT INTO tbl_transaksi(tgl_transaksi, id_produk, quantity, id_customer, add_date, update_date) VALUES('$tgl_transaksi','$id_produk', '$quantity', '$id_customer','$add_date', '$update_date')");

		header('Location: data transaksi.php');
		}
		
	}
	?>
</body>
</html>
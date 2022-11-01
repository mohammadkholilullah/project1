<?php
include "../perpustakaan/koneksi.php";

if (isset($_POST['submit'])) {
	$nama_barang = $_POST['nama_barang'];
	$jumlah = $_POST['jumlah'];
	$tanggal_masuk = $_POST['tanggal_masuk'];

	$sql = "INSERT INTO data_barang (nama_barang, jumlah, tanggal_masuk) VALUES ('$nama_barang','$jumlah','$tanggal_masuk')";
	$kueri = mysqli_query($koneksi, $sql);
	header("location: utama.php?tampil=barang");
	var_dump($kueri);
	if ($kueri) {
		echo "Berhasil";
	} else {
		echo "GAgal";
		echo mysqli_error($koneksi);
	}
}
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Detail Inventaris</title>
	<link rel="stylesheet" type="text/css" href="../assets/bootstrap/bootstrap.min.css">
	<script src="../assets/bootstrap/bootstrap.min.js"></script>
	<script src="../assets/bootstrap/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../assets/font-awesome/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="../assets/font-awesome/css/font-awesome.min.css">
	<link rel="icon" type="images/png" href="../assets/img/bg.png">
</head>

<div>
	<h2 class="page-header" align="center"> Tambah Data Inventaris</h2>
	<form method="POST" class="form-horizontal">
		<div class="container">
			<label>Nama Barang :</label>
			<input class="form-control" type="text" name="nama_barang" required>
		</div>
		<br>
		<div class="container">
			<label>Jumlah :</label>
			<input class="form-control" type="text" name="jumlah" required>
		</div>
		<br>
		<div class="container">
			<label>Tanggal Masuk :</label>
			<input class="form-control" type="date" name="tanggal_masuk" required>
		</div>
		<br>
		<div class="container">
			<input type="submit" class="btn btn-primary" name="submit" value="Simpan">
			<input type="reset" class="btn btn-primary" name="reset" value="Reset">
			<a href="utama.php?tampil=barang" class="btn btn-danger">Kembali</a>
		</div>
		</table>
	</form>
</div>
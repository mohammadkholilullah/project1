<?php
include "../perpustakaan/koneksi.php";

$nama_barang = isset($_GET['id']) ? $_GET['id'] : '';

if (isset($_POST['submit'])) {
	$nama_barang = $_POST['nama_barang'];
	$jumlah = $_POST['jumlah'];
	$tanggal_masuk = $_POST['tanggal_masuk'];

	$sql = "UPDATE data_barang SET nama_barang='$nama_barang', jumlah='$jumlah', tanggal_masuk='$tanggal_masuk' WHERE nama_barang='$nama_barang'";
	$query = mysqli_query($koneksi, $sql);
	header("location: utama.php?tampil=barang");
}

$sql = "SELECT nama_barang, jumlah, tanggal_masuk FROM data_barang WHERE nama_barang='$nama_barang'";
$kueri = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_assoc($kueri);

?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit Data Inventaris</title>
	<link rel="stylesheet" type="text/css" href="../assets/bootstrap/bootstrap.min.css">
	<script src="../assets/bootstrap/bootstrap.min.js"></script>
	<script src="../assets/bootstrap/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../assets/font-awesome/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="../assets/font-awesome/css/font-awesome.min.css">
	<link rel="icon" type="images/png" href="../assets/img/bg.png">
</head>

<body>
<h2 class="page-header" style="text-align: center;"> Edit Data Inventaris</h2>
	<div class="container">
		<form method="POST" action="edit_barang.php">
			<div class="panel-body">
				<label>Nama Barang :</label>
				<input class="form-control" type="text" name="nama_barang" value=<?php echo $data['nama_barang']; ?>>
			</div>
			<div class="panel-body">
				<label>Jumlah :</label>
				<input class="form-control" type="text" name="jumlah" value=<?php echo $data['jumlah']; ?>>
			</div>
			<div class="panel-body">
				<label>Tanggal Masuk :</label>
				<input class="form-control" type="date" name="tanggal_masuk" value=<?php echo $data['tanggal_masuk']; ?>>
			</div>
			<div class="panel-body">
				<input type="submit" class="btn btn-primary" name="submit" value="Edit">
				<a href="utama.php?tampil=barang" class="btn btn-danger">Kembali</a>
			</div>
		</form>
	</div>

</body>

</html>
<?php
include "../perpustakaan/koneksi.php";

if (isset($_POST['submit'])) {
	$nama_pengurus = $_POST['nama_pengurus'];
	$ttl = $_POST['ttl'];
	$jk = $_POST['jk'];
	$jabatan = $_POST['jabatan'];
	$hp = $_POST['hp'];
	$alamat = $_POST['alamat'];
	$poto = $_POST['poto'];

	$sql = "INSERT INTO data_pengurus (nama_pengurus, ttl, jk, jabatan, hp, alamat, poto) VALUES ('$nama_pengurus','$ttl','$jk','$jabatan','$hp','$alamat','$poto')";
	$kueri = mysqli_query($koneksi, $sql);
	// header("location: home.php");
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
	<title>Detail Informasi Anak</title>
	<link rel="stylesheet" type="text/css" href="../assets/bootstrap/bootstrap.min.css">
	<script src="../assets/bootstrap/bootstrap.min.js"></script>
	<script src="../assets/bootstrap/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../assets/font-awesome/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="../assets/font-awesome/css/font-awesome.min.css">
	<link rel="icon" type="images/png" href="../assets/img/bg.png">
</head>

<div>
	<h2 class="page-header">Tambah Data Pengurus</h2>
	<form method="POST" class="form-horizontal" action="aksi_pengurus.php" enctype="multipart/form-data">
		<div class="panel-body">
			<label>Nama :</label>
			<input class="form-control" type="text" name="nama_pengurus" required>
		</div>
		<div class="panel-body">
			<label>Tempat, Tanggal Lahir :</label>
			<input class="form-control" type="text" name="ttl" required>
		</div>
		<div class="panel-body">
			<label>Jenis Kelamin</label>
			<div class="radio">
				<label><input type="radio" name="jk" value="Laki-Laki" <?php if ($data['jk'] = 'Laki-Laki') echo 'checked' ?>>Laki-Laki</label>
				<label><input type="radio" name="jk" value="Perempuan" <?php if ($data['jk'] == 'Perempuan') echo 'checked' ?>>Perempuan</label>
			</div>
		</div>
		<div class="panel-body">
			<label>Jabatan :</label>
			<input class="form-control" type="text" name="jabatan" required>
		</div>
		<div class="panel-body">
			<label>No Handphone :</label>
			<input class="form-control" type="number" name="hp" required>
		</div>
		<div class="panel-body">
			<label>Alamat :</label>
			<textarea class="form-control" cols="136" rows="5" name="alamat" required></textarea>
		</div>
		<div class="panel-body">
			<label>Upload foto :</label>
			<input type="file" name="poto" required>
			<p style="color: red">Ekstensi yang diperbolehkan .png | .jpg | .jpeg</p>
		</div>
		<div class="panel-body">
			<input type="submit" class="btn btn-primary" name="submit" value="Simpan">
			<input type="reset" class="btn btn-primary" name="reset" value="Reset">
		</div>
		</table>
	</form>
</div>
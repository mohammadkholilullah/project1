<?php
include "../perpustakaan/koneksi.php";

$nik = isset($_GET['id']) ? $_GET['id'] : '';

if (isset($_POST['submit'])) {
	$nik = $_POST['nik'];
	$nama = $_POST['nama'];
	$ttl = $_POST['ttl'];
	$jk = $_POST['jk'];
	$status = $_POST['status'];
	$pendidikan = $_POST['pendidikan'];
	$hp = $_POST['hp'];
	$nama_ibu = $_POST['nama_ibu'];
	$nama_ayah = $_POST['nama_ayah'];
	$masuk = $_POST['masuk'];
	$alamat = $_POST['alamat'];

	$sql = "UPDATE data_siswa SET nik='$nik', nama='$nama', ttl='$ttl', jk='$jk', status='$status', pendidikan='$pendidikan', hp='$hp', nama_ibu='$nama_ibu', nama_ayah='$nama_ayah', masuk='$masuk', alamat='$alamat' WHERE nik='$nik'";
	$query = mysqli_query($koneksi, $sql);
	header("location: utama.php?tampil=lihat");
}

$sql = "SELECT nik, nama, ttl, jk, status, pendidikan, hp, nama_ibu, nama_ayah, masuk, alamat FROM data_siswa WHERE nik='$nik'";
$kueri = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_assoc($kueri);

?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit Informasi Anak</title>
	<link rel="stylesheet" type="text/css" href="../assets/bootstrap/bootstrap.min.css">
	<script src="../assets/bootstrap/bootstrap.min.js"></script>
	<script src="../assets/bootstrap/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../assets/font-awesome/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="../assets/font-awesome/css/font-awesome.min.css">
	<link rel="icon" type="images/png" href="../assets/img/bg.png">
</head>

<body>
<h2 class="page-header" style="text-align: center;"> Edit Data Anak</h2>
	<div class="container">
		<form method="POST" action="edit.php">
			<div class="panel-body">
				<label>NIK :</label>
				<input class="form-control" type="text" name="nik" value="<?php echo $data['nik']; ?>">
			</div>
			<div class="panel-body">
				<label>Nama :</label>
				<input class="form-control" type="text" name="nama" value="<?php echo $data['nama']; ?>">
			</div>
			<div class="panel-body">
				<label>Tampat, Tanggal Lahir</label>
				<input class="form-control" type="text" name="ttl" value="<?php echo $data['ttl']; ?>">
			</div>
			<div class="panel-body">
				<label>Jenis Kelamin</label>
				<div class="radio">
					<label><input type="radio" name="jk" value="Laki-Laki" <?php if ($data['jk'] == 'Laki-Laki') echo 'checked' ?>>Laki-Laki</label>
					<label><input type="radio" name="jk" value="Perempuan" <?php if ($data['jk'] == 'Perempuan') echo 'checked' ?>>Perempuan</label>
				</div>
			</div>
			<div class="panel-body">
				<label>Status :</label>
				<input class="form-control" type="text" name="status" value="<?php echo $data['status']; ?>">
			</div>
			<div class="panel-body">
				<label>Pendidikan :</label>
				<input class="form-control" type="text" name="pendidikan" value="<?php echo $data['pendidikan']; ?>">
			</div>
			<div class="panel-body">
				<label>No Handphone</label>
				<input class="form-control" type="number" name="hp" value="<?php echo $data['hp']; ?>">
			</div>
			<div class="panel-body">
				<label>Nama Ibu :</label>
				<input class="form-control" type="text" name="nama_ibu" value="<?php echo $data['nama_ibu']; ?>">
			</div>
			<div class="panel-body">
				<label>Nama Ayah :</label>
				<input class="form-control" type="text" name="nama_ayah" value="<?php echo $data['nama_ayah']; ?>">
			</div>
			<div class="panel-body">
				<label>Masuk Panti :</label>
				<input class="form-control" type="date" name="masuk" value="<?php echo $data['masuk']; ?>">
			</div>
			<div class="panel-body">
				<label>Alamat :</label>
				<input class="form-control" type="textarea" name="alamat" value="<?php echo $data['alamat']; ?>">
			</div>
			<div class="panel-body">
				<input type="submit" class="btn btn-primary" name="submit" value="Edit">
				<a href="utama.php?tampil=lihat" class="btn btn-primary">Kembali</a>
			</div>
		</form>
	</div>
	<br>
</body>

</html>
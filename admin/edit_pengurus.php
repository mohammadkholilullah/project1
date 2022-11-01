<?php
include "../perpustakaan/koneksi.php";

$nama_pengurus = isset($_GET['id']) ? $_GET['id'] : '';

if (isset($_POST['submit'])) {
	$nama_pengurus = $_POST['nama_pengurus'];
	$ttl = $_POST['ttl'];
	$jk = $_POST['jk'];
	$jabatan = $_POST['jabatan'];
	$hp = $_POST['hp'];
	$alamat = $_POST['alamat'];

	$sql = "UPDATE data_pengurus SET nama_pengurus='$nama_pengurus', ttl='$ttl', jk='$jk', jabatan='$jabatan', hp='$hp', alamat='$alamat' WHERE nama_pengurus='$nama_pengurus'";
	$query = mysqli_query($koneksi, $sql);
	header("location: utama.php?tampil=lihat2");
}

$sql = "SELECT nama_pengurus, ttl, jk, jabatan, hp, alamat FROM data_pengurus WHERE nama_pengurus='$nama_pengurus'";
$kueri = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_assoc($kueri);

?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit Informasi Pengurus</title>
	<link rel="stylesheet" type="text/css" href="../assets/bootstrap/bootstrap.min.css">
	<script src="../assets/bootstrap/bootstrap.min.js"></script>
	<script src="../assets/bootstrap/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../assets/font-awesome/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="../assets/font-awesome/css/font-awesome.min.css">
	<link rel="icon" type="images/png" href="../assets/img/bg.png">
</head>

<body>
<h2 class="page-header" style="text-align: center;"> Edit Data Pengurus</h2>
	<div class="container">
		<form method="POST" action="edit_pengurus.php">
			<div class="panel-body">
				<label>Nama :</label>
				<input class="form-control" type="text" name="nama_pengurus" value="<?php echo $data['nama_pengurus']; ?>">
			</div>
			<div class="panel-body">
				<label>Tampat, Tanggal Lahir :</label>
				<input class="form-control" type="text" name="ttl" value="<?php echo $data['ttl']; ?>">
			</div>
			<div class="panel-body">
				<label>Jenis Kelamin :</label>
				<div class="radio">
					<label><input type="radio" name="jk" value="Laki-Laki" <?php if ($data['jk'] == 'Laki-Laki') echo 'checked' ?>>Laki-Laki</label>
					<label><input type="radio" name="jk" value="Perempuan" <?php if ($data['jk'] == 'Perempuan') echo 'checked' ?>>Perempuan</label>
				</div>
			</div>
			<div class="panel-body">
				<label>Jabatan :</label>
				<input class="form-control" type="text" name="jabatan" value="<?php echo $data['jabatan']; ?>">
			</div>
			<div class="panel-body">
				<label>No Handphone :</label>
				<input class="form-control" type="text" name="hp" value="<?php echo $data['hp']; ?>">
			</div>
			<div class="panel-body">
				<label>Alamat :</label>
				<input class="form-control" type="textarea" name="alamat" value="<?php echo $data['alamat']; ?>">
			</div>
			<div class="panel-body">
				<input type="submit" class="btn btn-primary" name="submit" value="Edit">
				<a href="utama.php?tampil=lihat2" class="btn btn-primary">Kembali</a>
			</div>
		</form>
	</div>

</body>

</html>
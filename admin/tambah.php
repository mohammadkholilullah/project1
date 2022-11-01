<?php
include "../perpustakaan/koneksi.php";

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
	$poto = $_POST['poto'];


	$sql = "INSERT INTO data_siswa (nik, nama, ttl, jk, status, pendidikan, hp, nama_ibu, nama_ayah, masuk, alamat, poto) VALUES ('$nik','$nama','$ttl','$jk','$status','$pendidikan','$hp','$nama_ibu','$nama_ayah','$masuk','$alamat','$poto')";
	$kueri = mysqli_query($koneksi, $sql);
	// header("location: home.php");
	// header("location: utama.php?tampil=lihat");

	var_dump($kueri);
	if ($kueri) {
		echo "Berhasil";
	} else {
		echo "GAgal";
		echo mysqli_error($koneksi);
	}
}
?>

<div>
	<h2 class="page-header">Tambah Data Anak</h2>
	<form method="POST" class="form-horizontal" action="aksi.php" enctype="multipart/form-data">
		<div class="panel-body">
			<label>NIK :</label>
			<input class="form-control" type="number" name="nik" required>
		</div>
		<div class="panel-body">
			<label>Nama :</label>
			<input class="form-control" type="text" name="nama" required>
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
			<label>Status :</label>
			<input class="form-control" type="text" name="status" required>
		</div>
		<div class="panel-body">
			<label>Pendidikan :</label>
			<input class="form-control" type="text" name="pendidikan" required>
		</div>
		<div class="panel-body">
			<label>No Handphone :</label>
			<input class="form-control" type="number" name="hp" required>
		</div>
		<div class="panel-body">
			<label>Nama Ibu :</label>
			<input class="form-control" type="text" name="nama_ibu" required>
		</div>
		<div class="panel-body">
			<label>Nama Ayah :</label>
			<input class="form-control" type="text" name="nama_ayah" required>
		</div>
		<div class="panel-body">
			<label>Masuk Panti :</label>
			<input class="form-control" type="date" name="masuk" required>
		</div>
		<div class="panel-body">
			<label>Alamat :</label>
			<textarea name="alamat" class="form-control" cols="136" rows="5" required></textarea>
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
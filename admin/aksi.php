<?php
include "../perpustakaan/koneksi.php";
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
 
$rand = rand();
$ekstensi =  array('png','jpg','jpeg');
$filename = $_FILES['poto']['name'];
$ukuran = $_FILES['poto']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);
 
if(!in_array($ext,$ekstensi) ) {
	header("location: utama.php?tampil=lihat");
}else{
	if($ukuran < 1044070){		
		$xx = $rand.'_'.$filename;
		move_uploaded_file($_FILES['poto']['tmp_name'], 'foto/'.$rand.'_'.$filename);
		mysqli_query($koneksi, "INSERT INTO data_siswa VALUES(NULL,'$nik','$nama','$ttl','$jk','$status','$pendidikan','$hp','$nama_ibu','$nama_ayah','$masuk','$alamat','$xx')");
		header("location: utama.php?tampil=lihat");
	}else{
		header("location: utama.php?tampil=lihat");
	}
}
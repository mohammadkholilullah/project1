<?php
include "../perpustakaan/koneksi.php";
    $nama_pengurus = $_POST['nama_pengurus'];
    $ttl = $_POST['ttl'];
    $jk = $_POST['jk'];
    $jabatan = $_POST['jabatan'];
    $hp = $_POST['hp'];
    $alamat = $_POST['alamat'];
 
$rand = rand();
$ekstensi =  array('png','jpg','jpeg');
$filename = $_FILES['poto']['name'];
$ukuran = $_FILES['poto']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);
 
if(!in_array($ext,$ekstensi) ) {
	header("location: utama.php?tampil=lihat2");
}else{
	if($ukuran < 1044070){		
		$xx = $rand.'_'.$filename;
		move_uploaded_file($_FILES['poto']['tmp_name'], 'gambar/'.$rand.'_'.$filename);
		mysqli_query($koneksi, "INSERT INTO data_pengurus VALUES(NULL,'$nama_pengurus','$ttl','$jk','$jabatan','$hp','$alamat','$xx')");
		header("location: utama.php?tampil=lihat2");
	}else{
		header("location: utama.php?tampil=lihat2");
	}
}
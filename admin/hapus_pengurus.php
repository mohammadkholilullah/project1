<?php
include "../perpustakaan/koneksi.php";

$nama_pengurus = $_GET['id'];

$sql = "DELETE FROM data_pengurus WHERE nama_pengurus='$nama_pengurus'";
$kueri = mysqli_query($koneksi, $sql);


header("Location: utama.php?tampil=lihat2");

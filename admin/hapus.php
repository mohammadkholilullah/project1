<?php
include "../perpustakaan/koneksi.php";

$nik = $_GET['id'];

$sql = "DELETE FROM data_siswa WHERE nik='$nik'";
$kueri = mysqli_query($koneksi, $sql);


header("Location: utama.php?tampil=lihat");

<?php
include "../perpustakaan/koneksi.php";

$nama_barang = $_GET['id'];

$sql = "DELETE FROM data_barang WHERE nama_barang='$nama_barang'";
$kueri = mysqli_query($koneksi, $sql);


header("Location: utama.php?tampil=barang");

<?php
include "../perpustakaan/koneksi.php";

$nama = $_GET['id'];

$sql = "DELETE FROM data_ass WHERE nama='$nama'";
$kueri = mysqli_query($koneksi, $sql);


header("Location: utama.php?tampil=ass");

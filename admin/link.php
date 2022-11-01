<?php
if (isset($_GET['tampil'])) $tampil = $_GET['tampil'];
else $tampil = "welcome";

if ($tampil == "welcome") include("welcome.php");
elseif ($tampil == "logout") include("logout.php");

elseif ($tampil == "lihat")
    include("home.php");

elseif ($tampil == "tambah")
    include("tambah.php");

elseif ($tampil == "lihat2")
    include("home_pengurus.php");

elseif ($tampil == "tambah2")
    include("tambah_pengurus.php");

elseif ($tampil == "barang")
    include("home_barang.php");

elseif ($tampil == "tambah3")
    include("tambah_barang.php");

elseif ($tampil == "ass")
    include("home_ass.php");

elseif ($tampil == "tambah4")
    include("tambah_ass.php");

elseif ($tampil == "logout")
    include("logout.php");

else echo "Tidak Tersedia";

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Pendataan Anak Budhi Asih</title>
  <link rel="icon" type="images/png" href="../assets/img/bg.png">

  <!-- Bootstrap Core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- MetisMenu CSS -->
  <link href="css/metisMenu.min.css" rel="stylesheet">

  <!-- Timeline CSS -->
  <link href="css/timeline.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="css/startmin.css" rel="stylesheet">

  <!-- Morris Charts CSS -->
  <link href="css/morris.css" rel="stylesheet">

  <!-- Custom Fonts -->
  <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body>

  <div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="background-color: black;">
      <div class="navbar-header">
        <a class="navbar-brand" href="#" style="color: white;">Sistem Pendataan Anak Panti Asuhan Budhi Asih Cirebon</a>
      </div>

      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      <!-- Sidebar -->
      <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
          <ul class="nav" id="side-menu">
            <li class="sidebar-search">
              <div class="input-group custom-search-form">
                <input type="text" class="form-control" placeholder="Cari...">
                <span class="input-group-btn">
                  <button class="btn btn-primary" type="button">
                    <i class="fa fa-search"></i>
                  </button>
                </span>
              </div>
            </li>
            <li>
              <a href="?tampil=welcome" class="active"><i class="fa fa-home fa-fw"></i> Halaman Utama</a>
            </li>
            <li>
              <a href="#" class="active"><i class="fa fa-sitemap fa-fw"></i> Manajemen Data<span class="fa arrow"></span></a>
              <ul class="nav nav-second-level">
                <li>
                  <a href="?tampil=lihat"><span class="fa fa-user fa-fw"></span> Daftar Nama Anak</a>
                  <a href="?tampil=tambah"><span class="fa fa-user fa-fw"></span> Tambah Data Anak</a>
                  <a href="?tampil=lihat2"><span class="fa fa-user fa-fw"></span> Data Pengurus</a>
                  <a href="?tampil=tambah2"><span class="fa fa-user fa-fw"></span> Tambah Data Pengurus</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="?tampil=barang"><i class="fa fa-archive fa-fw"></i> Inventaris Panti</a>
            </li>
            <li>
              <a href="?tampil=ass"><i class="fa fa-file fa-fw"></i> Data Assesment</a>
            </li>
            <li>
              <a href="?tampil=logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div id="page-wrapper">
      <div class="container-fluid">

        <div class="row" style="margin-bottom: 100px;">
          <div class="col-lg-12">
          </div>
        </div>

        <?php
        include "link.php";
        ?>
      </div>
    </div>

  </div>

  <!-- jQuery -->
  <script src="js/jquery.min.js"></script>

  <!-- Bootstrap Core JavaScript -->
  <script src="js/bootstrap.min.js"></script>

  <!-- Metis Menu Plugin JavaScript -->
  <script src="js/metisMenu.min.js"></script>

  <!-- Custom Theme JavaScript -->
  <script src="js/startmin.js"></script>

</body>

</html>
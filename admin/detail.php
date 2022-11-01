<?php
include "../perpustakaan/koneksi.php";

$nik = isset($_GET['id']) ? $_GET['id'] : '';

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


    $sql = "UPDATE data_siswa SET nik='$nik', nama='$nama', ttl='$ttl', jk='$jk', status='$status', pendidikan='$pendidikan', hp='$hp', nama_ibu='$nama_ibu', nama_ayah='$nama_ayah', masuk='$masuk', alamat='$alamat', poto='$poto' WHERE nik='$nik'";
    $query = mysqli_query($koneksi, $sql);
    header("location: utama.php?tampil=lihat");
}

$sql = "SELECT nik, nama, ttl, jk, status, pendidikan, hp, nama_ibu, nama_ayah, masuk, alamat, poto FROM data_siswa WHERE nik='$nik'";
$kueri = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_assoc($kueri);

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Informasi Anak</title>
    <link rel="stylesheet" type="text/css" href="../assets/bootstrap/bootstrap.min.css">
    <script src="../assets/bootstrap/bootstrap.min.js"></script>
    <script src="../assets/bootstrap/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../assets/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="../assets/font-awesome/css/font-awesome.min.css">
    <link rel="icon" type="images/png" href="../assets/img/bg.png">
</head>

<body>

    <div class="panel-body">
        <div>
            <div class="panel-body">
                <div class="panel-body" style="background-color: #00D7FF;">
                    <h4 style="text-align: center;"><b>Informasi Anak</b></h4>
                </div>
                <br>
                <center><img src="foto/<?php echo $data['poto'] ?>" width="300px" height="300px"></center>
                <!-- Tombol -->
                <p style="text-align: right;" class="col-lg-12">
                    <a href="utama.php?tampil=lihat" class="btn btn-primary">Kembali</a>
                    <a href="edit.php?id=<?php echo $data['nik']; ?>"><button type="button" class="btn btn-warning">Edit</button></a>
                    <a href="cetak_anak.php?id=<?php echo $data['nik']; ?>" class="btn btn-success" title="cetak"><span class="fa fa-download"> &nbsp Cetak</span></a>
                </p>

                <br>
                <div class="col-lg-6">
                    <label>NIK :</label>
                    <input readonly class="form-control" value="<?php echo $data['nik']; ?>">
                </div>

                <div class="col-lg-6">
                    <label>No Handphone :</label>
                    <input readonly class="form-control" value="<?php echo $data['hp']; ?>">
                </div>

                <div class="col-lg-6">
                    <label>Nama :</label>
                    <input readonly class="form-control" value="<?php echo $data['nama']; ?>">
                </div>

                <div class="col-lg-6">
                    <label>Jenis Kelamin :</label>
                    <div class="radio">
                        <label><input type="radio" <?php if ($data['jk'] == 'Laki-Laki') echo 'checked' ?>>Laki-Laki</label>
                        <label><input type="radio" <?php if ($data['jk'] == 'Perempuan') echo 'checked' ?>>Perempuan</label>
                    </div>
                </div>

                <div class="col-lg-6">
                    <label>Tampat, Tanggal Lahir :</label>
                    <input readonly class="form-control" value="<?php echo $data['ttl']; ?>">
                </div>

                <div class="col-lg-6">
                    <label>Nama Ayah :</label>
                    <input readonly class="form-control" value="<?php echo $data['nama_ayah']; ?>">
                </div>

                <div class="col-lg-6">
                    <label>Status :</label>
                    <input readonly class="form-control" value="<?php echo $data['status']; ?>">
                </div>

                <div class="col-lg-6">
                    <label>Nama Ibu :</label>
                    <input readonly class="form-control" value="<?php echo $data['nama_ibu']; ?>">
                </div>

                <div class="col-lg-6">
                    <label>Pendidikan :</label>
                    <input readonly class="form-control" value="<?php echo $data['pendidikan']; ?>">
                </div>

                <div class="col-lg-6">
                    <label>Masuk Panti :</label>
                    <input readonly class="form-control" value="<?php echo $data['masuk']; ?>">
                </div>

                <div class="col-lg-12">
                    <label>Alamat :</label>
                    <textarea cols="84" rows="3" readonly class="form-control"><?php echo $data['alamat']; ?></textarea>
                </div>

                
            </div>
        </div>
    </div>

</body>

</html>
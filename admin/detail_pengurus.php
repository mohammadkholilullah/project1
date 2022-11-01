<?php
include "../perpustakaan/koneksi.php";

$nama_pengurus = isset($_GET['id']) ? $_GET['id'] : '';

if (isset($_POST['submit'])) {
    $nama_pengurus = $_POST['nama_pengurus'];
    $ttl = $_POST['ttl'];
    $jk = $_POST['jk'];
    $jabatan = $_POST['jabatan'];
    $hp = $_POST['hp'];
    $alamat = $_POST['alamat'];
    $poto = $_POST['poto'];

    $sql = "UPDATE data_pengurus SET nama_pengurus='$nama_pengurus', ttl='$ttl', jk='$jk', jabatan='$jabatan', hp='$hp', alamat='$alamat', poto='$poto' WHERE nama_pengurus='$nama_pengurus'";
    $query = mysqli_query($koneksi, $sql);
    header("location: utama.php?tampil=lihat2");
}

$sql = "SELECT nama_pengurus, ttl, jk, jabatan, hp, alamat, poto FROM data_pengurus WHERE nama_pengurus='$nama_pengurus'";
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
                <div class="panel-heading" style="background-color: #59CE8F;">
                    <h4 style="text-align: center;"><strong>Informasi Pengurus</strong></h4>
                </div>
                <br>
                <div class="col-lg-6">
                    <center><img src="gambar/<?php echo $data['poto'] ?>" width="400px" height="500px"></center>
                </div>
                <div class="col-lg-6">
                    <label>Nama :</label>
                    <input readonly class="form-control" value="<?php echo $data['nama_pengurus']; ?>">
                </div>
                <div class="col-lg-6">
                    <label>Tampat, Tanggal Lahir :</label>
                    <input readonly class="form-control" value="<?php echo $data['ttl']; ?>">
                </div>
                <div class="col-lg-6">
                    <label>Jenis Kelamin :</label>
                    <div class="radio">
                        <label><input type="radio" <?php if ($data['jk'] == 'Laki-Laki') echo 'checked' ?>>Laki-Laki</label>
                        <label><input type="radio" <?php if ($data['jk'] == 'Perempuan') echo 'checked' ?>>Perempuan</label>
                    </div>
                </div>
                <div class="col-lg-6">
                    <label>Jabatan :</label>
                    <input readonly class="form-control" value="<?php echo $data['jabatan']; ?>">
                </div>
                <div class="col-lg-6">
                    <label>No Handphone :</label>
                    <input readonly class="form-control" value="<?php echo $data['hp']; ?>">
                </div>
                <div class="col-lg-6">
                    <label>Alamat :</label>
                    <textarea cols="84" rows="6" readonly class="form-control"><?php echo $data['alamat']; ?></textarea>
                </div>
                <p style="text-align: right;" class="col-lg-12">
                    <a href="utama.php?tampil=lihat2"><button type="button" class="btn btn-primary">Kembali</button></a>
                    <a href="edit_pengurus.php?id=<?php echo $data['nama_pengurus']; ?>"><button type="button" class="btn btn-warning">Edit</button></a>
                </p>
            </div>
        </div>
    </div>
    
</body>

</html>
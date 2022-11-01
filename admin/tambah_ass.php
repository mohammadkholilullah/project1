<?php
include "../perpustakaan/koneksi.php";

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $soal1 = $_POST['soal1'];
    $soal2 = $_POST['soal2'];
    $soal3 = $_POST['soal3'];
    $soal4 = $_POST['soal4'];
    $soal5 = $_POST['soal5'];
    $soal6 = $_POST['soal6'];
    $soal7 = $_POST['soal7'];
    $soal8 = $_POST['soal8'];
    $soal9 = $_POST['soal9'];
    $soal10 = $_POST['soal10'];
    $soal11 = $_POST['soal11'];
    $soal12 = $_POST['soal12'];
    $soal13 = $_POST['soal13'];
    $soal14 = $_POST['soal14'];
    $soal15 = $_POST['soal15'];
    $soal16 = $_POST['soal16'];
    $soal17 = $_POST['soal17'];
    $soal18 = $_POST['soal18'];
    $soal19 = $_POST['soal19'];
    $soal20 = $_POST['soal20'];
    $soal21 = $_POST['soal21'];
    $soal22 = $_POST['soal22'];
    $soal23 = $_POST['soal23'];
    $soal24 = $_POST['soal24'];
    $soal25 = $_POST['soal25'];
    $soal26 = $_POST['soal26'];
    $soal27 = $_POST['soal27'];
    $soal28 = $_POST['soal28'];
    $soal29 = $_POST['soal29'];
    $soal30 = $_POST['soal30'];
    $soal31 = $_POST['soal31'];

    $pilihan1 = $_POST['pilihan1'];
    $pilihan2 = $_POST['pilihan2'];
    $pilihan3 = $_POST['pilihan3'];
    $pilihan4 = $_POST['pilihan4'];
    $pilihan5 = $_POST['pilihan5'];
    $pilihan6 = $_POST['pilihan6'];
    $pilihan7 = $_POST['pilihan7'];
    $pilihan8 = $_POST['pilihan8'];
    $pilihan9 = $_POST['pilihan9'];
    $pilihan10 = $_POST['pilihan10'];
    $pilihan11 = $_POST['pilihan11'];
    $pilihan12 = $_POST['pilihan12'];
    $pilihan13 = $_POST['pilihan13'];
    $pilihan14 = $_POST['pilihan14'];
    $pilihan15 = $_POST['pilihan15'];
    $pilihan16 = $_POST['pilihan16'];
    $pilihan17 = $_POST['pilihan17'];
    $pilihan18 = $_POST['pilihan18'];
    $pilihan19 = $_POST['pilihan19'];
    $pilihan20 = $_POST['pilihan20'];
    $pilihan21 = $_POST['pilihan21'];
    $pilihan22 = $_POST['pilihan22'];
    $pilihan23 = $_POST['pilihan23'];
    $pilihan24 = $_POST['pilihan24'];
    $pilihan25 = $_POST['pilihan25'];
    $pilihan26 = $_POST['pilihan26'];
    $pilihan27 = $_POST['pilihan27'];
    $pilihan28 = $_POST['pilihan28'];
    $pilihan29 = $_POST['pilihan29'];
    $pilihan30 = $_POST['pilihan30'];
    $pilihan31 = $_POST['pilihan31'];


    $sql = "INSERT INTO data_ass (nama, soal1, pilihan1, soal2, pilihan2, soal3, pilihan3, soal4, pilihan4, soal5, pilihan5, soal6, pilihan6, soal7, pilihan7, soal8, pilihan8, soal9, pilihan9, soal10, pilihan10, soal11, pilihan11, soal12, pilihan12, soal13, pilihan13, soal14, pilihan14, soal15, pilihan15, soal16, pilihan16, soal17, pilihan17, soal18, pilihan18, soal19, pilihan19, soal20, pilihan20, soal21, pilihan21, soal22, pilihan22, soal23, pilihan23, soal24, pilihan24, soal25, pilihan25, soal26, pilihan26, soal27, pilihan27, soal28, pilihan28, soal29, pilihan29, soal30, pilihan30, soal31, pilihan31) VALUES ('$nama','$soal1','$pilihan1','$soal2','$pilihan2','$soal3','$pilihan3','$soal4','$pilihan4','$soal5','$pilihan5','$soal6','$pilihan6','$soal7','$pilihan7','$soal8','$pilihan8','$soal9','$pilihan9','$soal10','$pilihan10','$soal11','$pilihan11','$soal12','$pilihan12','$soal13','$pilihan13','$soal14','$pilihan14','$soal15','$pilihan15','$soal16','$pilihan16','$soal17','$pilihan17','$soal18','$pilihan18','$soal19','$pilihan19','$soal20','$pilihan20','$soal21','$pilihan21','$soal22','$pilihan22','$soal23','$pilihan23','$soal24','$pilihan24','$soal25','$pilihan25','$soal26','$pilihan26','$soal27','$pilihan27','$soal28','$pilihan28','$soal29','$pilihan29','$soal30','$pilihan30','$soal31','$pilihan31')";
    $kueri = mysqli_query($koneksi, $sql);
    header("location: utama.php?tampil=ass");
    var_dump($kueri);
    if ($kueri) {
        echo "Berhasil";
    } else {
        echo "GAgal";
        echo mysqli_error($koneksi);
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Inventaris</title>
    <link rel="stylesheet" type="text/css" href="../assets/bootstrap/bootstrap.min.css">
    <script src="../assets/bootstrap/bootstrap.min.js"></script>
    <script src="../assets/bootstrap/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../assets/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="../assets/font-awesome/css/font-awesome.min.css">
    <link rel="icon" type="images/png" href="../assets/img/bg.png">
</head>

<div>
    <h2 class="page-header" style="text-align: center;">Tambah Data Assesment</h2>
    <form method="POST" class="form-horizontal">
        <div class="container">
            <label>Nama Anak :</label>
            <input class="form-control" type="text" name="nama" required>
        </div>
        <br>

    <!-- Tabel -->
        <div class="container">
            <table class="table table-bordered table-hover" border="1">
                <tr style=" background-color: #F0E161;">
                    <th width="100px" style="text-align: center;">
                        <h4><b>Interaksi Sosial/Emosi</b></h4>
                    </th>
                    <th width="50px" style="text-align: center;">
                        <h4><b>Ya</b></h4>
                    </th>
                    <th width="50px" style="text-align: center;">
                        <h4><b>Tidak</b></h4>
                    </th>
                </tr>
        </div>

    <!-- Questions -->
        <div>

            <tr>
                <th style="text-align: left;">
                    <input type="text" readonly class="form-control" name="soal1" value="Mampu berbicara dengan jelas">
                <th style="text-align: center;">
                    <input type="checkbox" name="pilihan1" value="ya" <?php echo ($data['pilihan1'] = 'ya') ?>>
                <th style="text-align: center;">
                    <input type="checkbox" name="pilihan1" value="tdk" <?php echo ($data['pilihan1'] == 'tdk') ?>>
                </th>
            </tr>

            <tr>
                <th style="text-align: left;">
                    <input type="text" readonly class="form-control" name="soal2" value="Pemalu dan tidak percaya diri">
                <th style="text-align: center;">
                    <input type="checkbox" name="pilihan2" value="ya" <?php echo ($data['pilihan2'] = 'ya') ?>>
                <th style="text-align: center;">
                    <input type="checkbox" name="pilihan2" value="tdk" <?php echo ($data['pilihan2'] == 'tdk') ?>>
                </th>
            </tr>

            <tr>
                <th style="text-align: left;">
                    <input type="text" readonly class="form-control" name="soal3" value="Mudah tersinggung">
                <th style="text-align: center;">
                    <input type="checkbox" name="pilihan3" value="ya" <?php echo ($data['pilihan3'] = 'ya') ?>>
                <th style="text-align: center;">
                    <input type="checkbox" name="pilihan3" value="tdk" <?php echo ($data['pilihan3'] == 'tdk') ?>>
                </th>
            </tr>

            <tr>
                <th style="text-align: left;">
                    <input type="text" readonly class="form-control" name="soal4" value="Kurang perbendahaan kata">
                <th style="text-align: center;">
                    <input type="checkbox" name="pilihan4" value="ya" <?php echo ($data['pilihan4'] = 'ya') ?>>
                <th style="text-align: center;">
                    <input type="checkbox" name="pilihan4" value="tdk" <?php echo ($data['pilihan4'] == 'tdk') ?>>
                </th>
            </tr>

            <tr>
                <th style="text-align: left;">
                    <input type="text" readonly class="form-control" name="soal5" value="Sulit bergaul dengan sebaya">
                <th style="text-align: center;">
                    <input type="checkbox" name="pilihan5" value="ya" <?php echo ($data['pilihan5'] = 'ya') ?>>
                <th style="text-align: center;">
                    <input type="checkbox" name="pilihan5" value="tdk" <?php echo ($data['pilihan5'] == 'tdk') ?>>
                </th>
            </tr>

            <tr>
                <th style="text-align: left;">
                    <input type="text" readonly class="form-control" name="soal6" value="Mudah marah">
                <th style="text-align: center;">
                    <input type="checkbox" name="pilihan6" value="ya" <?php echo ($data['pilihan6'] = 'ya') ?>>
                <th style="text-align: center;">
                    <input type="checkbox" name="pilihan6" value="tdk" <?php echo ($data['pilihan6'] == 'tdk') ?>>
                </th>
            </tr>

            <tr>
                <th style="text-align: left;">
                    <input type="text" readonly class="form-control" name="soal7" value="Mengalami kesulitan terhadap lingkugan yang baru">
                <th style="text-align: center;">
                    <input type="checkbox" name="pilihan7" value="ya" <?php echo ($data['pilihan7'] = 'ya') ?>>
                <th style="text-align: center;">
                    <input type="checkbox" name="pilihan7" value="tdk" <?php echo ($data['pilihan7'] == 'tdk') ?>>
                </th>
            </tr>

            <tr>
                <th style="text-align: left;">
                    <input type="text" readonly class="form-control" name="soal8" value="Suka mengamuk dan merusak barang orang lain">
                <th style="text-align: center;">
                    <input type="checkbox" name="pilihan8" value="ya" <?php echo ($data['pilihan8'] = 'ya') ?>>
                <th style="text-align: center;">
                    <input type="checkbox" name="pilihan8" value="tdk" <?php echo ($data['pilihan8'] == 'tdk') ?>>
                </th>
            </tr>

            <tr>
                <th style="text-align: left;">
                    <input type="text" readonly class="form-control" name="soal9" value="Suka mengganggu temannya">
                <th style="text-align: center;">
                    <input type="checkbox" name="pilihan9" value="ya" <?php echo ($data['pilihan9'] = 'ya') ?>>
                <th style="text-align: center;">
                    <input type="checkbox" name="pilihan9" value="tdk" <?php echo ($data['pilihan9'] == 'tdk') ?>>
                </th>
            </tr>

            <tr>
                <th style="text-align: left;">
                    <input type="text" readonly class="form-control" name="soal10" value="Membutuhkan bantuan orang lain dalam melakukan sesuatu">
                <th style="text-align: center;">
                    <input type="checkbox" name="pilihan10" value="ya" <?php echo ($data['pilihan10'] = 'ya') ?>>
                <th style="text-align: center;">
                    <input type="checkbox" name="pilihan10" value="tdk" <?php echo ($data['pilihan10'] == 'tdk') ?>>
                </th>
            </tr>

            <tr>
                <th style="text-align: left;">
                    <input type="text" readonly class="form-control" name="soal11" value="Kesulitan dalam melakukan gerakan">
                <th style="text-align: center;">
                    <input type="checkbox" name="pilihan11" value="ya" <?php echo ($data['pilihan11'] = 'ya') ?>>
                <th style="text-align: center;">
                    <input type="checkbox" name="pilihan11" value="tdk" <?php echo ($data['pilihan11'] == 'tdk') ?>>
                </th>
            </tr>

            <tr>
                <th style="text-align: left;">
                    <input type="text" readonly class="form-control" name="soal12" value="Suka melamun">
                <th style="text-align: center;">
                    <input type="checkbox" name="pilihan12" value="ya" <?php echo ($data['pilihan12'] = 'ya') ?>>
                <th style="text-align: center;">
                    <input type="checkbox" name="pilihan12" value="tdk" <?php echo ($data['pilihan12'] == 'tdk') ?>>
                </th>
            </tr>

            <tr>
                <th style="text-align: left;">
                    <input type="text" readonly class="form-control" name="soal13" value="Peka terhadap sentuhan">
                <th style="text-align: center;">
                    <input type="checkbox" name="pilihan13" value="ya" <?php echo ($data['pilihan13'] = 'ya') ?>>
                <th style="text-align: center;">
                    <input type="checkbox" name="pilihan13" value="tdk" <?php echo ($data['pilihan13'] == 'tdk') ?>>
                </th>
            </tr>

            <tr>
                <th style="text-align: left;">
                    <input type="text" readonly class="form-control" name="soal14" value="Melakukan sesuatu tergantung mood">
                <th style="text-align: center;">
                    <input type="checkbox" name="pilihan14" value="ya" <?php echo ($data['pilihan14'] = 'ya') ?>>
                <th style="text-align: center;">
                    <input type="checkbox" name="pilihan14" value="tdk" <?php echo ($data['pilihan14'] == 'tdk') ?>>
                </th>
            </tr>

            <tr>
                <th style="text-align: left;">
                    <input type="text" readonly class="form-control" name="soal15" value="Sulit memusatkan perhatian">
                <th style="text-align: center;">
                    <input type="checkbox" name="pilihan15" value="ya" <?php echo ($data['pilihan15'] = 'ya') ?>>
                <th style="text-align: center;">
                    <input type="checkbox" name="pilihan15" value="tdk" <?php echo ($data['pilihan15'] == 'tdk') ?>>
                </th>
            </tr>

            <tr>
                <th style="text-align: left;">
                    <input type="text" readonly class="form-control" name="soal16" value="Rasa ingin tahu besar">
                <th style="text-align: center;">
                    <input type="checkbox" name="pilihan16" value="ya" <?php echo ($data['pilihan16'] = 'ya') ?>>
                <th style="text-align: center;">
                    <input type="checkbox" name="pilihan16" value="tdk" <?php echo ($data['pilihan16'] == 'tdk') ?>>
                </th>
            </tr>

            <tr style=" background-color: #F0E161;">
                <th width="100px" style="text-align: center;" colspan="3">
                    <h4><b>Fisik</b></h4>
                </th>
            </tr>

            <tr>
                <th style="text-align: left;">
                    <input type="text" readonly class="form-control" name="soal17" value="Kehilangan keseimbangan">
                <th style="text-align: center;">
                    <input type="checkbox" name="pilihan17" value="ya" <?php echo ($data['pilihan17'] = 'ya') ?>>
                <th style="text-align: center;">
                    <input type="checkbox" name="pilihan17" value="tdk" <?php echo ($data['pilihan17'] == 'tdk') ?>>
                </th>
            </tr>

            <tr>
                <th style="text-align: left;">
                    <input type="text" readonly class="form-control" name="soal18" value="Bentuk tubuh merosot dan agak bungkuk">
                <th style="text-align: center;">
                    <input type="checkbox" name="pilihan18" value="ya" <?php echo ($data['pilihan18'] = 'ya') ?>>
                <th style="text-align: center;">
                    <input type="checkbox" name="pilihan18" value="tdk" <?php echo ($data['pilihan18'] == 'tdk') ?>>
                </th>
            </tr>

            <tr>
                <th style="text-align: left;">
                    <input type="text" readonly class="form-control" name="soal19" value="Tidak mampu duduk atau berjalan">
                <th style="text-align: center;">
                    <input type="checkbox" name="pilihan19" value="ya" <?php echo ($data['pilihan19'] = 'ya') ?>>
                <th style="text-align: center;">
                    <input type="checkbox" name="pilihan19" value="tdk" <?php echo ($data['pilihan19'] == 'tdk') ?>>
                </th>
            </tr>

            <tr>
                <th style="text-align: left;">
                    <input type="text" readonly class="form-control" name="soal20" value="Jari jari tangan kaku dan tidak dapat menggenggam">
                <th style="text-align: center;">
                    <input type="checkbox" name="pilihan20" value="ya" <?php echo ($data['pilihan20'] = 'ya') ?>>
                <th style="text-align: center;">
                    <input type="checkbox" name="pilihan20" value="tdk" <?php echo ($data['pilihan20'] == 'tdk') ?>>
                </th>
            </tr>

            <tr>
                <th style="text-align: left;">
                    <input type="text" readonly class="form-control" name="soal21" value="Ada bagian anggota gerak yang tidak lengkap/lebih kecil">
                <th style="text-align: center;">
                    <input type="checkbox" name="pilihan21" value="ya" <?php echo ($data['pilihan21'] = 'ya') ?>>
                <th style="text-align: center;">
                    <input type="checkbox" name="pilihan21" value="tdk" <?php echo ($data['pilihan21'] == 'tdk') ?>>
                </th>
            </tr>

            <tr style=" background-color: #F0E161;">
                <th width="100px" style="text-align: center;" colspan="3">
                    <h4><b>Akademik</b></h4>
                </th>
            </tr>

            <tr>
                <th style="text-align: left;">
                    <input type="text" readonly class="form-control" name="soal22" value="Mampu mengucap kata/kalimat dengan jelas">
                <th style="text-align: center;">
                    <input type="checkbox" name="pilihan22" value="ya" <?php echo ($data['pilihan22'] = 'ya') ?>>
                <th style="text-align: center;">
                    <input type="checkbox" name="pilihan22" value="tdk" <?php echo ($data['pilihan22'] == 'tdk') ?>>
                </th>
            </tr>

            <tr>
                <th style="text-align: left;">
                    <input type="text" readonly class="form-control" name="soal23" value="Mampu membaca kata/kalimat">
                <th style="text-align: center;">
                    <input type="checkbox" name="pilihan23" value="ya" <?php echo ($data['pilihan23'] = 'ya') ?>>
                <th style="text-align: center;">
                    <input type="checkbox" name="pilihan23" value="tdk" <?php echo ($data['pilihan23'] == 'tdk') ?>>
                </th>
            </tr>

            <tr>
                <th style="text-align: left;">
                    <input type="text" readonly class="form-control" name="soal24" value="Mampu menulis kata/kalimat">
                <th style="text-align: center;">
                    <input type="checkbox" name="pilihan24" value="ya" <?php echo ($data['pilihan24'] = 'ya') ?>>
                <th style="text-align: center;">
                    <input type="checkbox" name="pilihan24" value="tdk" <?php echo ($data['pilihan24'] == 'tdk') ?>>
                </th>
            </tr>

            <tr>
                <th style="text-align: left;">
                    <input type="text" readonly class="form-control" name="soal25" value="Mampu melakukan perhitungan sederhana">
                <th style="text-align: center;">
                    <input type="checkbox" name="pilihan25" value="ya" <?php echo ($data['pilihan25'] = 'ya') ?>>
                <th style="text-align: center;">
                    <input type="checkbox" name="pilihan25" value="tdk" <?php echo ($data['pilihan25'] == 'tdk') ?>>
                </th>
            </tr>

            <tr>
                <th style="text-align: left;">
                    <input type="text" readonly class="form-control" name="soal26" value="Mampu melakukan perjumlahan dan pengurangan">
                <th style="text-align: center;">
                    <input type="checkbox" name="pilihan26" value="ya" <?php echo ($data['pilihan26'] = 'ya') ?>>
                <th style="text-align: center;">
                    <input type="checkbox" name="pilihan26" value="tdk" <?php echo ($data['pilihan26'] == 'tdk') ?>>
                </th>
            </tr>

            <tr>
                <th style="text-align: left;">
                    <input type="text" readonly class="form-control" name="soal27" value="Mampu mewarnai">
                <th style="text-align: center;">
                    <input type="checkbox" name="pilihan27" value="ya" <?php echo ($data['pilihan27'] = 'ya') ?>>
                <th style="text-align: center;">
                    <input type="checkbox" name="pilihan27" value="tdk" <?php echo ($data['pilihan27'] == 'tdk') ?>>
                </th>
            </tr>

            <tr>
                <th style="text-align: left;">
                    <input type="text" readonly class="form-control" name="soal28" value="Mampu menjiplak gambar/pola">
                <th style="text-align: center;">
                    <input type="checkbox" name="pilihan28" value="ya" <?php echo ($data['pilihan28'] = 'ya') ?>>
                <th style="text-align: center;">
                    <input type="checkbox" name="pilihan28" value="tdk" <?php echo ($data['pilihan28'] == 'tdk') ?>>
                </th>
            </tr>

            <tr>
                <th style="text-align: left;">
                    <input type="text" readonly class="form-control" name="soal29" value="Mampu membedakan warna">
                <th style="text-align: center;">
                    <input type="checkbox" name="pilihan29" value="ya" <?php echo ($data['pilihan29'] = 'ya') ?>>
                <th style="text-align: center;">
                    <input type="checkbox" name="pilihan29" value="tdk" <?php echo ($data['pilihan29'] == 'tdk') ?>>
                </th>
            </tr>

            <tr>
                <th style="text-align: left;">
                    <input type="text" readonly class="form-control" name="soal30" value="Mampu menyebutkan nama benda yang diperintahkan">
                <th style="text-align: center;">
                    <input type="checkbox" name="pilihan30" value="ya" <?php echo ($data['pilihan30'] = 'ya') ?>>
                <th style="text-align: center;">
                    <input type="checkbox" name="pilihan30" value="tdk" <?php echo ($data['pilihan30'] == 'tdk') ?>>
                </th>
            </tr>

            <tr>
                <th style="text-align: left;">
                    <input type="text" readonly class="form-control" name="soal31" value="Mampu menyebutkan nama buah/hewan sesuai gambar">
                <th style="text-align: center;">
                    <input type="checkbox" name="pilihan31" value="ya" <?php echo ($data['pilihan31'] = 'ya') ?>>
                <th style="text-align: center;">
                    <input type="checkbox" name="pilihan31" value="tdk" <?php echo ($data['pilihan31'] == 'tdk') ?>>
                </th>
            </tr>
            </table>

        </div>

    <!-- Tombol -->
        <div class="container" style="text-align: right;">
            <a href="utama.php?tampil=ass" class="btn btn-danger">Kembali</a>
            <input type="reset" class="btn btn-primary" name="reset" value="Reset">
            <input type="submit" class="btn btn-primary" name="submit" value="Simpan">
        </div>

    </form>
    <br>
</div>
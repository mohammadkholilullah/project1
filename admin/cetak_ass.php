<?php
include "../perpustakaan/koneksi.php";

$nama = isset($_GET['id']) ? $_GET['id'] : '';

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

    $sql = "UPDATE data_ass SET nama='$nama', 
    soal1='$soal1', pilihan1='$pilihan1', soal2='$soal2', pilihan2='$pilihan2', soal3='$soal3', pilihan3='$pilihan3', soal4='$soal4', pilihan4='$pilihan4', soal5='$soal5', pilihan5='$pilihan5', soal6='$soal6', pilihan6='$pilihan6', soal7='$soal7', pilihan7='$pilihan7', soal8='$soal8', pilihan8='$pilihan8', soal9='$soal9', pilihan9='$pilihan9', soal10='$soal10', pilihan10='$pilihan10', soal11='$soal11', pilihan11='$pilihan11', soal12='$soal12', pilihan12='$pilihan12', soal13='$soal13', pilihan13='$pilihan13', soal14='$soal14', pilihan14='$pilihan14', soal15='$soal15', pilihan15='$pilihan15', soal16='$soal16', pilihan16='$pilihan16', soal17='$soal17', pilihan17='$pilihan17', soal18='$soal18', pilihan18='$pilihan18', soal19='$soal19', pilihan19='$pilihan19', soal20='$soal20', pilihan20='$pilihan20', soal21='$soal21', pilihan21='$pilihan21', soal22='$soal22', pilihan22='$pilihan22', soal23='$soal23', pilihan23='$pilihan23', soal24='$soal24', pilihan24='$pilihan24', soal25='$soal25', pilihan25='$pilihan25', soal26='$soal26', pilihan26='$pilihan26', soal27='$soal27', pilihan27='$pilihan27', soal28='$soal28', pilihan28='$pilihan29', soal29='$soal29', pilihan10='$pilihan29', soal30='$soal30', pilihan30='$pilihan30', soal31='$soal31', pilihan31='$pilihan31' WHERE nama='$nama'";
    $query = mysqli_query($koneksi, $sql);
    header("location: utama.php?tampil=ass");
}

$sql = "SELECT nama, soal1, pilihan1, soal2, pilihan2, soal3, pilihan3, soal4, pilihan4, soal5, pilihan5, soal6, pilihan6, soal7, pilihan7, soal8, pilihan8, soal9, pilihan9, soal10, pilihan10, soal11, pilihan11, soal12, pilihan12, soal13, pilihan13, soal14, pilihan14, soal15, pilihan15, soal16, pilihan16, soal17, pilihan17, soal18, pilihan18, soal19, pilihan19, soal20, pilihan20, soal21, pilihan21, soal22, pilihan22, soal23, pilihan23, soal24, pilihan24, soal25, pilihan25, soal26, pilihan26, soal27, pilihan27, soal28, pilihan28, soal29, pilihan29, soal30, pilihan30, soal31, pilihan31 FROM data_ass WHERE nama='$nama'";
$kueri = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_assoc($kueri);

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>`</title>
    <link rel="stylesheet" type="text/css" href="../assets/bootstrap/bootstrap.min.css">
    <script src="../assets/bootstrap/bootstrap.min.js"></script>
    <script src="../assets/bootstrap/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../assets/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="../assets/font-awesome/css/font-awesome.min.css">
    <link rel="icon" type="images/png" href="../assets/img/bg.png">
</head>

<body>
    <h2 class="page-header" style="text-align: center;">YAYASAN LKSA BUDHI ASIH CIREBON</h2>
    <h3 style="text-align: center;">Data Assesment Anak</h3>
    <div class="panel-body">
            <div class="container">
                <label>Nama Anak :</label>
                <?php echo $data['nama']; ?>
            </div>
            <br>

            <!-- Table assesment -->
                <div class="container">
                    <table class="table table-bordered table-hover" border="1">
                        <tr style="background-color: #F0E161;">
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

            <!-- Question -->
            
                    <tr>
                        <th style="text-align: left;">
                            <?php echo $data['soal1']; ?>
                        <th style="text-align: center;">
                            <input type="checkbox" name="pilihan1" value="ya" <?php if ($data['pilihan1'] == 'ya') echo 'checked' ?>>
                        <th style="text-align: center;">
                            <input type="checkbox" name="pilihan1" value="tdk" <?php if ($data['pilihan1'] == 'tdk') echo 'checked' ?>>
                        </th>
                    </tr>

                    <tr>
                        <th style="text-align: left;">
                            <?php echo $data['soal2']; ?>
                        <th style="text-align: center;">
                            <input type="checkbox" name="pilihan2" value="ya" <?php if ($data['pilihan2'] == 'ya') echo 'checked' ?>>
                        <th style="text-align: center;">
                            <input type="checkbox" name="pilihan2" value="tdk" <?php if ($data['pilihan2'] == 'tdk') echo 'checked' ?>>
                        </th>
                    </tr>

                    <tr>
                        <th style="text-align: left;">
                            <?php echo $data['soal3']; ?>
                        <th style="text-align: center;">
                            <input type="checkbox" name="pilihan3" value="ya" <?php if ($data['pilihan3'] == 'ya') echo 'checked' ?>>
                        <th style="text-align: center;">
                            <input type="checkbox" name="pilihan3" value="tdk" <?php if ($data['pilihan3'] == 'tdk') echo 'checked' ?>>
                        </th>
                    </tr>

                    <tr>
                        <th style="text-align: left;">
                            <?php echo $data['soal4']; ?>
                        <th style="text-align: center;">
                            <input type="checkbox" name="pilihan4" value="ya" <?php if ($data['pilihan4'] == 'ya') echo 'checked' ?>>
                        <th style="text-align: center;">
                            <input type="checkbox" name="pilihan4" value="tdk" <?php if ($data['pilihan4'] == 'tdk') echo 'checked' ?>>
                        </th>
                    </tr>

                    <tr>
                        <th style="text-align: left;">
                            <?php echo $data['soal5']; ?>
                        <th style="text-align: center;">
                            <input type="checkbox" name="pilihan5" value="ya" <?php if ($data['pilihan5'] == 'ya') echo 'checked' ?>>
                        <th style="text-align: center;">
                            <input type="checkbox" name="pilihan5" value="tdk" <?php if ($data['pilihan5'] == 'tdk') echo 'checked' ?>>
                        </th>
                    </tr>

                    <tr>
                        <th style="text-align: left;">
                            <?php echo $data['soal6']; ?>
                        <th style="text-align: center;">
                            <input type="checkbox" name="pilihan6" value="ya" <?php if ($data['pilihan6'] == 'ya') echo 'checked' ?>>
                        <th style="text-align: center;">
                            <input type="checkbox" name="pilihan6" value="tdk" <?php if ($data['pilihan6'] == 'tdk') echo 'checked' ?>>
                        </th>
                    </tr>

                    <tr>
                        <th style="text-align: left;">
                            <?php echo $data['soal7']; ?>
                        <th style="text-align: center;">
                            <input type="checkbox" name="pilihan7" value="ya" <?php if ($data['pilihan7'] == 'ya') echo 'checked' ?>>
                        <th style="text-align: center;">
                            <input type="checkbox" name="pilihan7" value="tdk" <?php if ($data['pilihan7'] == 'tdk') echo 'checked' ?>>
                        </th>
                    </tr>

                    <tr>
                        <th style="text-align: left;">
                            <?php echo $data['soal8']; ?>
                        <th style="text-align: center;">
                            <input type="checkbox" name="pilihan8" value="ya" <?php if ($data['pilihan8'] == 'ya') echo 'checked' ?>>
                        <th style="text-align: center;">
                            <input type="checkbox" name="pilihan8" value="tdk" <?php if ($data['pilihan8'] == 'tdk') echo 'checked' ?>>
                        </th>
                    </tr>

                    <tr>
                        <th style="text-align: left;">
                            <?php echo $data['soal9']; ?>
                        <th style="text-align: center;">
                            <input type="checkbox" name="pilihan9" value="ya" <?php if ($data['pilihan9'] == 'ya') echo 'checked' ?>>
                        <th style="text-align: center;">
                            <input type="checkbox" name="pilihan9" value="tdk" <?php if ($data['pilihan9'] == 'tdk') echo 'checked' ?>>
                        </th>
                    </tr>

                    <tr>
                        <th style="text-align: left;">
                            <?php echo $data['soal10']; ?>
                        <th style="text-align: center;">
                            <input type="checkbox" name="pilihan10" value="ya" <?php if ($data['pilihan10'] == 'ya') echo 'checked' ?>>
                        <th style="text-align: center;">
                            <input type="checkbox" name="pilihan10" value="tdk" <?php if ($data['pilihan10'] == 'tdk') echo 'checked' ?>>
                        </th>
                    </tr>

                    <tr>
                        <th style="text-align: left;">
                            <?php echo $data['soal11']; ?>
                        <th style="text-align: center;">
                            <input type="checkbox" name="pilihan11" value="ya" <?php if ($data['pilihan11'] == 'ya') echo 'checked' ?>>
                        <th style="text-align: center;">
                            <input type="checkbox" name="pilihan11" value="tdk" <?php if ($data['pilihan11'] == 'tdk') echo 'checked' ?>>
                        </th>
                    </tr>

                    <tr>
                        <th style="text-align: left;">
                            <?php echo $data['soal12']; ?>
                        <th style="text-align: center;">
                            <input type="checkbox" name="pilihan12" value="ya" <?php if ($data['pilihan12'] == 'ya') echo 'checked' ?>>
                        <th style="text-align: center;">
                            <input type="checkbox" name="pilihan12" value="tdk" <?php if ($data['pilihan12'] == 'tdk') echo 'checked' ?>>
                        </th>
                    </tr>

                    <tr>
                        <th style="text-align: left;">
                            <?php echo $data['soal13']; ?>
                        <th style="text-align: center;">
                            <input type="checkbox" name="pilihan13" value="ya" <?php if ($data['pilihan13'] == 'ya') echo 'checked' ?>>
                        <th style="text-align: center;">
                            <input type="checkbox" name="pilihan13" value="tdk" <?php if ($data['pilihan13'] == 'tdk') echo 'checked' ?>>
                        </th>
                    </tr>

                    <tr>
                        <th style="text-align: left;">
                            <?php echo $data['soal14']; ?>
                        <th style="text-align: center;">
                            <input type="checkbox" name="pilihan14" value="ya" <?php if ($data['pilihan14'] == 'ya') echo 'checked' ?>>
                        <th style="text-align: center;">
                            <input type="checkbox" name="pilihan14" value="tdk" <?php if ($data['pilihan14'] == 'tdk') echo 'checked' ?>>
                        </th>
                    </tr>

                    <tr>
                        <th style="text-align: left;">
                            <?php echo $data['soal15']; ?>
                        <th style="text-align: center;">
                            <input type="checkbox" name="pilihan15" value="ya" <?php if ($data['pilihan15'] == 'ya') echo 'checked' ?>>
                        <th style="text-align: center;">
                            <input type="checkbox" name="pilihan15" value="tdk" <?php if ($data['pilihan15'] == 'tdk') echo 'checked' ?>>
                        </th>
                    </tr>

                        <tr style=" background-color: #F0E161;">
                            <th width="100px" style="text-align: center;" colspan="3">
                                <h4><b>Fisik</b></h4>
                            </th>
                        </tr>

                    <tr>
                        <th style="text-align: left;">
                            <?php echo $data['soal16']; ?>
                        <th style="text-align: center;">
                            <input type="checkbox" name="pilihan16" value="ya" <?php if ($data['pilihan16'] == 'ya') echo 'checked' ?>>
                        <th style="text-align: center;">
                            <input type="checkbox" name="pilihan16" value="tdk" <?php if ($data['pilihan16'] == 'tdk') echo 'checked' ?>>
                        </th>
                    </tr>

                    <tr>
                        <th style="text-align: left;">
                            <?php echo $data['soal17']; ?>
                        <th style="text-align: center;">
                            <input type="checkbox" name="pilihan17" value="ya" <?php if ($data['pilihan17'] == 'ya') echo 'checked' ?>>
                        <th style="text-align: center;">
                            <input type="checkbox" name="pilihan17" value="tdk" <?php if ($data['pilihan17'] == 'tdk') echo 'checked' ?>>
                        </th>
                    </tr>

                    <tr>
                        <th style="text-align: left;">
                            <?php echo $data['soal18']; ?>
                        <th style="text-align: center;">
                            <input type="checkbox" name="pilihan18" value="ya" <?php if ($data['pilihan18'] == 'ya') echo 'checked' ?>>
                        <th style="text-align: center;">
                            <input type="checkbox" name="pilihan18" value="tdk" <?php if ($data['pilihan18'] == 'tdk') echo 'checked' ?>>
                        </th>
                    </tr>

                    <tr>
                        <th style="text-align: left;">
                            <?php echo $data['soal19']; ?>
                        <th style="text-align: center;">
                            <input type="checkbox" name="pilihan19" value="ya" <?php if ($data['pilihan19'] == 'ya') echo 'checked' ?>>
                        <th style="text-align: center;">
                            <input type="checkbox" name="pilihan19" value="tdk" <?php if ($data['pilihan19'] == 'tdk') echo 'checked' ?>>
                        </th>
                    </tr>

                    <tr>
                        <th style="text-align: left;">
                            <?php echo $data['soal20']; ?>
                        <th style="text-align: center;">
                            <input type="checkbox" name="pilihan20" value="ya" <?php if ($data['pilihan20'] == 'ya') echo 'checked' ?>>
                        <th style="text-align: center;">
                            <input type="checkbox" name="pilihan20" value="tdk" <?php if ($data['pilihan20'] == 'tdk') echo 'checked' ?>>
                        </th>
                    </tr>

                    <tr>
                        <th style="text-align: left;">
                            <?php echo $data['soal21']; ?>
                        <th style="text-align: center;">
                            <input type="checkbox" name="pilihan21" value="ya" <?php if ($data['pilihan21'] == 'ya') echo 'checked' ?>>
                        <th style="text-align: center;">
                            <input type="checkbox" name="pilihan21" value="tdk" <?php if ($data['pilihan21'] == 'tdk') echo 'checked' ?>>
                        </th>
                    </tr>

                        <tr style=" background-color: #F0E161;">
                            <th width="100px" style="text-align: center;" colspan="3">
                                <h4><b>Akademik</b></h4>
                            </th>
                        </tr>
                    
                    <tr>
                        <th style="text-align: left;">
                            <?php echo $data['soal22']; ?>
                        <th style="text-align: center;">
                            <input type="checkbox" name="pilihan22" value="ya" <?php if ($data['pilihan22'] == 'ya') echo 'checked' ?>>
                        <th style="text-align: center;">
                            <input type="checkbox" name="pilihan22" value="tdk" <?php if ($data['pilihan22'] == 'tdk') echo 'checked' ?>>
                        </th>
                    </tr>
                    
                    <tr>
                        <th style="text-align: left;">
                            <?php echo $data['soal23']; ?>
                        <th style="text-align: center;">
                            <input type="checkbox" name="pilihan23" value="ya" <?php if ($data['pilihan23'] == 'ya') echo 'checked' ?>>
                        <th style="text-align: center;">
                            <input type="checkbox" name="pilihan23" value="tdk" <?php if ($data['pilihan23'] == 'tdk') echo 'checked' ?>>
                        </th>
                    </tr>

                    <tr>
                        <th style="text-align: left;">
                            <?php echo $data['soal24']; ?>
                        <th style="text-align: center;">
                            <input type="checkbox" name="pilihan24" value="ya" <?php if ($data['pilihan24'] == 'ya') echo 'checked' ?>>
                        <th style="text-align: center;">
                            <input type="checkbox" name="pilihan24" value="tdk" <?php if ($data['pilihan24'] == 'tdk') echo 'checked' ?>>
                        </th>
                    </tr>

                    <tr>
                        <th style="text-align: left;">
                            <?php echo $data['soal25']; ?>
                        <th style="text-align: center;">
                            <input type="checkbox" name="pilihan25" value="ya" <?php if ($data['pilihan25'] == 'ya') echo 'checked' ?>>
                        <th style="text-align: center;">
                            <input type="checkbox" name="pilihan25" value="tdk" <?php if ($data['pilihan25'] == 'tdk') echo 'checked' ?>>
                        </th>
                    </tr>

                    <tr>
                        <th style="text-align: left;">
                            <?php echo $data['soal26']; ?>
                        <th style="text-align: center;">
                            <input type="checkbox" name="pilihan26" value="ya" <?php if ($data['pilihan26'] == 'ya') echo 'checked' ?>>
                        <th style="text-align: center;">
                            <input type="checkbox" name="pilihan26" value="tdk" <?php if ($data['pilihan26'] == 'tdk') echo 'checked' ?>>
                        </th>
                    </tr>

                    <tr>
                        <th style="text-align: left;">
                            <?php echo $data['soal27']; ?>
                        <th style="text-align: center;">
                            <input type="checkbox" name="pilihan27" value="ya" <?php if ($data['pilihan27'] == 'ya') echo 'checked' ?>>
                        <th style="text-align: center;">
                            <input type="checkbox" name="pilihan27" value="tdk" <?php if ($data['pilihan27'] == 'tdk') echo 'checked' ?>>
                        </th>
                    </tr>

                    <tr>
                        <th style="text-align: left;">
                            <?php echo $data['soal28']; ?>
                        <th style="text-align: center;">
                            <input type="checkbox" name="pilihan28" value="ya" <?php if ($data['pilihan28'] == 'ya') echo 'checked' ?>>
                        <th style="text-align: center;">
                            <input type="checkbox" name="pilihan28" value="tdk" <?php if ($data['pilihan28'] == 'tdk') echo 'checked' ?>>
                        </th>
                    </tr>

                    <tr>
                        <th style="text-align: left;">
                            <?php echo $data['soal29']; ?>
                        <th style="text-align: center;">
                            <input type="checkbox" name="pilihan29" value="ya" <?php if ($data['pilihan29'] == 'ya') echo 'checked' ?>>
                        <th style="text-align: center;">
                            <input type="checkbox" name="pilihan29" value="tdk" <?php if ($data['pilihan29'] == 'tdk') echo 'checked' ?>>
                        </th>
                    </tr>

                    <tr>
                        <th style="text-align: left;">
                            <?php echo $data['soal30']; ?>
                        <th style="text-align: center;">
                            <input type="checkbox" name="pilihan30" value="ya" <?php if ($data['pilihan30'] == 'ya') echo 'checked' ?>>
                        <th style="text-align: center;">
                            <input type="checkbox" name="pilihan30" value="tdk" <?php if ($data['pilihan30'] == 'tdk') echo 'checked' ?>>
                        </th>
                    </tr>

                    <tr>
                        <th style="text-align: left;">
                            <?php echo $data['soal31']; ?>
                        <th style="text-align: center;">
                            <input type="checkbox" name="pilihan31" value="ya" <?php if ($data['pilihan31'] == 'ya') echo 'checked' ?>>
                        <th style="text-align: center;">
                            <input type="checkbox" name="pilihan31" value="tdk" <?php if ($data['pilihan31'] == 'tdk') echo 'checked' ?>>
                        </th>
                    </tr>

                </table>

            <!-- Tombol -->

        
        <script>
            window.print();
        </script>
    </div>

</body>
</html>
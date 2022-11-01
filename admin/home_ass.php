<?php
include "../perpustakaan/koneksi.php";
$sql = "SELECT nama, soal1, pilihan1, soal2, pilihan2 FROM data_ass";
$kueri = mysqli_query($koneksi, $sql);
$no = 1;
?>

<div>
    <h1 class="page-header" style="font-family: Poppins;">DATA ASSESMENT</h1>
    <a href="tambah_ass.php?id="><button type="button" class="btn btn-primary">+ Tambah Data</button></a>
    <p>
    <table class="table table-bordered table-hover" border="1">
        <tr style="background-color: #F0E161;">
            <th style="text-align: center;">No</th>
            <th style="text-align: center;">Nama Anak</th>
            <th style="text-align: center;">Tindakan</th>
        </tr>
        <tbody>
            <?php
            foreach ($kueri as $data) :
            ?>
                <tr>
                    <td style="text-align: center;" width="5%">
                        <?php echo $no++; ?>
                    </td>
                    <td style="text-align: center;">
                        <?php echo $data['nama']; ?>
                    </td>

                    <!-- Tombol -->
                    <td style="text-align: center;">
                        <a href="detail_ass.php?id=<?php echo $data['nama']; ?>" class="btn btn-primary btn-sm" title="detail"><span class="fa fa-list"> Detail</span></a>

                        <a href="hapus_ass.php?id=<?php echo $data['nama']; ?>" onclick="return confirm('Hapus data ini?')" class="btn btn-danger btn-sm" title="hapus"><span class="fa fa-trash-o"> Hapus</span></a>
                    </td>
                </tr>
            <?php
            endforeach;
            ?>
        </tbody>
    </table>
    </p>
</div>
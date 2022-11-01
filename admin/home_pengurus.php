<?php
include "../perpustakaan/koneksi.php";

$sql = "SELECT nama_pengurus, ttl, jk, jabatan, hp, alamat, poto FROM data_pengurus";
$kueri = mysqli_query($koneksi, $sql);
$no = 1;
?>

<div>
	<h1 class="page-header" style="font-family: Poppins;">DATA PENGURUS</h1>
	<table class="table table-striped table-hover" border="1">
		<tr style="background-color: #59CE8F;">
			<th style="text-align: center;">No</th>
			<th style="text-align: center;">Nama</th>
			<th style="text-align: center;">TTL</th>
			<th style="text-align: center;">Jabatan</th>
			<th style="text-align: center;">No Handphone</th>
			<th style="text-align: center;" colspan="3">Tindakan</th>
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
						<?php echo $data['nama_pengurus']; ?>
					</td>
					<td style="text-align: center;">
						<?php echo $data['ttl']; ?>
					</td>
					<td style="text-align: center;">
						<?php echo $data['jabatan']; ?>
					</td>
					<td style="text-align: center;">
						<?php echo $data['hp']; ?>
					</td>
					<td style="text-align: center;">
						<a href="detail_pengurus.php?id=<?php echo $data['nama_pengurus']; ?>" class="btn btn-primary btn-circle" title="detail"><span class="fa fa-list"></span></a>

						<a href="edit_pengurus.php?id=<?php echo $data['nama_pengurus']; ?>" class="btn btn-warning btn-circle" title="edit"><span class="fa fa-pencil-square-o"></span></a>

						<a href="hapus_pengurus.php?id=<?php echo $data['nama_pengurus']; ?>" onclick="return confirm('Hapus data ini?')" class="btn btn-danger btn-circle" title="hapus"><span class="fa fa-trash-o"></span></a>
					</td>
				</tr>
			<?php
			endforeach;
			?>
		</tbody>
	</table>
</div>
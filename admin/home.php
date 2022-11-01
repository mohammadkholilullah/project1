<?php
include "../perpustakaan/koneksi.php";
$sql = "SELECT nik, nama, ttl, jk, status, pendidikan, hp, nama_ibu, nama_ayah, masuk, alamat FROM data_siswa";
$kueri = mysqli_query($koneksi, $sql);
$no = 1;
?>

<div>
	<h1 class="page-header" style="font-family: Poppins;">DATA ANAK</h1>
	<table class="table table-striped table-hover" border="1">
		<tr style="background-color: #00D7FF;">
			<th style="text-align: center;">No</th>
			<th style="text-align: center;">NiK</th>
			<th style="text-align: center;">Nama</th>
			<th style="text-align: center;">TTL</th>
			<th style="text-align: center;">Status</th>
			<th style="text-align: center;">Pendidikan</th>
			<th style="text-align: center;">No Handphone</th>
			<th style="text-align: center;" colspan="3">Tindakan</th>
		</tr>
		<tbody>
			<?php
			foreach ($kueri as $data) :
			?>
				<tr>
					<td style="text-align: center;" width="4%">
						<?php echo $no++; ?>
					</td>
					<td style="text-align: center;">
						<?php echo $data['nik']; ?>
					</td>
					<td style="text-align: center;">
						<?php echo $data['nama']; ?>
					</td>
					<td style="text-align: center;">
						<?php echo $data['ttl']; ?>
					</td>
					<td style="text-align: center;">
						<?php echo $data['status']; ?>
					</td>
					<td style="text-align: center;">
						<?php echo $data['pendidikan']; ?>
					</td>
					<td style="text-align: center;">
						<?php echo $data['hp']; ?>
					</td>

					<!-- Tombol Button -->
					<td style="text-align: center;">
						<a href="detail.php?id=<?php echo $data['nik']; ?>" class="btn btn-primary btn-circle" title="detail"><span class="fa fa-list"></span></a>

						<a href="edit.php?id=<?php echo $data['nik']; ?>" class="btn btn-warning btn-circle" title="edit"><span class="fa fa-pencil-square-o"></span></a>

						<a href="hapus.php?id=<?php echo $data['nik']; ?>" onclick="return confirm('Hapus data ini?')" class="btn btn-danger btn-circle" title="hapus"><span class="fa fa-trash-o"></span></a>
					</td>
				</tr>
			<?php
			endforeach;
			?>
		</tbody>
	</table>
</div>
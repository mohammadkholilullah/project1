<?php
include "../perpustakaan/koneksi.php";
$sql = "SELECT nama_barang, jumlah, tanggal_masuk FROM data_barang";
$kueri = mysqli_query($koneksi, $sql);
$no = 1;
?>

<div>
	<h1 class="page-header" style="font-family: Poppins;">DATA INVENTARIS</h1>
	<a href="tambah_barang.php?id="><button type="button" class="btn btn-primary"> + Tambah Barang</button></a>
	<p>
	<table class="table table-bordered table-hover" border="1">
		<tr style="background-color: #C7D36F;">
			<th style="text-align: center;">No</th>
			<th style="text-align: center;">Nama Barang</th>
			<th style="text-align: center;">Jumlah</th>
			<th style="text-align: center;">Tanggal Masuk</th>
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
						<?php echo $data['nama_barang']; ?>
					</td>
					<td style="text-align: center;">
						<?php echo $data['jumlah']; ?>
					</td>
					<td style="text-align: center;">
						<?php echo $data['tanggal_masuk']; ?>
					</td>
					<td style="text-align: center;">
						<a href="edit_barang.php?id=<?php echo $data['nama_barang']; ?>" class="btn btn-warning btn-sm" title="edit"><span class="fa fa-pencil-square-o"> Edit</span></a>
						<a href="hapus_barang.php?id=<?php echo $data['nama_barang']; ?>" onclick="return confirm('Hapus data ini?')" class="btn btn-danger btn-sm" title="hapus"><span class="fa fa-trash-o"> Hapus</span></a>
					</td>
				</tr>
			<?php
			endforeach;
			?>
		</tbody>
	</table>
	</p>
</div>
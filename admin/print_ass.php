<!DOCTYPE html>
<html>
<head>
	<title>CETAK PRINT DATA DARI DATABASE DENGAN PHP - WWW.MALASNGODING.COM</title>
</head>
<body>
 
	<center>
 
		<h2>DATA ASSESMENT ANAK</h2>
		<h4>YAYASAN LKSA BUDHI ASIH CIREBON</h4>
 
	</center>
 
	<?php 
	include "../perpustakaan/koneksi.php";
	?>
 
	<table border="1" style="width: 100%">
		<tr>
			<th width="1%">No</th>
			<th>Nama</th>
			<th>Interaksi Sosial</th>
			<th>Ya/tdk</th>
		</tr>
		<?php 
		$no = 1;
		$sql = mysqli_query($koneksi,"select * from data_ass");
		while($data = mysqli_fetch_array($sql)){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $data['nama']; ?></td>
            <td><?php echo $data['soal1']; ?></td>
            <td><?php echo $data['pilihan1']; ?></td>
            <br>
            <td><?php echo $data['soal2']; ?></td>
            <td><?php echo $data['pilihan2']; ?></td>

		</tr>
		<?php 
		}
		?>
	</table>
 
	<script>
		window.print();
	</script>
 
</body>
</html>
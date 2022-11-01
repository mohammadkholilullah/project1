<?php
session_start();
session_destroy();
echo "<meta http-equiv='refresh' content='1; location:../index.php'>";
header ("location: ../index.php");
?>
<!DOCTYPE html>
<html>

<head>
	<title></title>
</head>

<body>
	<script type="text/javascript">
		alert("Terima kasih Admin, Anda Telah Keluar");
	</script>

</body>

</html>
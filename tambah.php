<?php
	include "koneksi.php";
	?>
	<!DOCTYPE html
	<html>
	<head>
		<title> Tambah Data </title>
	</head>
	<body>
		<form method="post">
			<input type="text" name="nama" placeholder="nama">
			<br>
			<textarea name="alamat" placeholder="alamat"></textarea> <br>
			<input type="number" name="telephone" placeholder="telephone"> <br>
			<input type="submit" name="simpan" value="simpan">
		</form>
		<?php
			if (isset($_POST['simpan'])) {
				$nama		= $_POST['nama'];
				$alamat 	= $_POST['alamat'];
				$telephone	= $_POST['telephone'];
				$Tambah = mysql_query($koneksi,"INSERT INTO data(nama,alamat,telephone,)VALUES('$nama','$alamat','$telephone') ");
				if ($Tambah) {
					?>
					<script type="text/javascript">
						alert('Tambah Data Berhasil');
						document.location.href="index.php";
					</script>
					<?php
				}
				else{
						echo "Sorry Gagal";
				}
				}
			?>
	</body>
	</html>
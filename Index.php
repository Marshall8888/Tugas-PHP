<?php
	include '';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Data</title>
</head>
<body>
	<table align="center" border="1" width="70%">
		<tr>
			<td colspan="5">
				<h3><center>DATA</center>></h3>
				<a href="tambah.php">Tambah</a>
			</td>
		</tr>
		<tr>
			<th>NO</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Telephone</th>
			<th>Opsi</th>
		</tr>
		<?php

			$no =1;
			$qry = mysql_query($koneksi,"SELECT * FROM data");
			while ($data = mysqli_fetch_array($qry))
			{

				?>

			<tr>
					<td> <?php echo $no++; ?></td>
					<td> <?php echo $data['Nama'];?> </td>
					<td> <?php echo $data['Alamat'];?> </td>
					<td> <?php echo $data['Telephone'];?>  </td>
					<td> <a onclick="return confirm('Apakah yakin untuk menghapus?')" href="hapus.php?id=<?php echo$data['id']; ?>"Hapus Data</a> <a href="edit.php?id=<?php echo$data['id']; ?>">edit</a> 
					</td>
			</tr>

			<?php
		}
		?>
	</table>

</body>
</html>
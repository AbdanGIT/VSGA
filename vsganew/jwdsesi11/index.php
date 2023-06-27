<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<h2>List Barang</h2>
<table border="1">
	<tr><th>No</th><th>Nama Merek</th><th>Warna</th><th>Jumlah</th><th>Opsi</th></tr>
	<?php
	include 'koneksi.php';
	$merek = mysqli_query($db, "SELECT * from merek");
	$no=1;
	foreach ($merek as $row) {
		echo "<tr>
				<td>$no</td>
				<td>".$row['nama_merk']."</td>
				<td>".$row['warna']."</td>
				<td>".$row['jumlah']."</td>
				<td><a href='edit-data.php?no=$row[no]'>Edit</a>
                <a href='hapus-data.php?no=$row[no]'>Delete</a>
            </td>

		</tr>";
		$no++;
	}
	?>

</table>
<a href="tambah-data.php">Tambah Data</a>
</body>
</html>
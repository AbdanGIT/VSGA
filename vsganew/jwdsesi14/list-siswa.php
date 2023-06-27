<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Digital Talent</title>
</head>
<body>

<h2 class="text-center">Siswa Yang Sudah Mendaftar</h2>
<input type="button"  class="btn btn-success btn-sm" onclick="location.href='form-data.php';" value="(+)Tambah Data"></td></tr>
<table class="table table-bordered table-striped table-danger">
	<tr><th>NO</th><th>Nama</th><th>Alamat</th><th>Jenis Kelamin</th><th>Agama</th><th>Sekolah Asal</th><th>ACTION</th></tr>
	<?php
	include 'koneksi.php';
	$siswa = mysqli_query($koneksi, "SELECT * from siswa");
	$no=1;
	foreach ($siswa as $row) {
		$jenis_kelamin = $row['jenis_kelamin']=='P'?'Perempuan':'Laki laki';
		echo "<tr>
				<td>$no</td>
				<td>".$row['nama']."</td>
				<td>".$row['alamat']."</td>
				<td>".$jenis_kelamin."</td>
				<td>".$row['agama']."</td>
				<td>".$row['sekolah']."</td>
				<td><a href='form-edit.php?id_siswa=$row[id_siswa]' class='btn btn-success btn-sm'>Edit</a>
				<a href='delete.php?id_siswa=$row[id_siswa]' class='btn btn-danger btn-sm'>Delete</a>
				</td>
		</tr>";
		$no++;
	}
	?>
</table>
					<tr><td colspan="2"><input type="button" class="btn btn-danger" onclick="location.href='index.php';" value="Kembali" /></td></tr>
</body>
</html>
<?php if(isset($_GET['status'])) { ?>
		<?php if($_GET['status'] == 'sukses') {
			echo "Anda berhasil Terdaftar!";
		} else {
			echo "Anda gagal Terdaftar!";
		}
	?>

<?php } ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>
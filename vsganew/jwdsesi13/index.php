<?php
session_start();
if($_SESSION['status'] !="login"){
	header("location:login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Digital Talent</title>
</head>
<body>
<h2 class="text-center">List Mahasiswa</h2>
<table class="table table-bordered table-striped table-danger">
	<tr><th>NO</th><th>NIM</th><th>NAMA</th><th>GENDER</th><th>JURUSAN</th><th>Alamat</th><th>ACTION</th></tr>
	<?php
		include 'koneksi.php';
	$mahasiswa = mysqli_query($db, "SELECT * from mahasiswa");
	$no=1;
	foreach ($mahasiswa as $row) {
		$jenis_kelamin = $row['jenis_kelamin']=='P'?'Perempuan':'Laki laki';
		echo "<tr>
				<td>$no</td>
				<td>".$row['nim']."</td>
				<td>".$row['nama']."</td>
				<td>".$jenis_kelamin."</td>
				<td>".$row['jurusan']."</td>
				<td>".$row['alamat']."</td>
				<td><a href='form-edit.php?id_mhs=$row[id_mhs]' class='btn btn-success btn-sm'>Edit</a>
				<a href='delete.php?id_mhs=$row[id_mhs]' class='btn btn-success btn-sm'>Delete</a>
				</td>
		</tr>";
		$no++;
	}
	?>
</table>
<a href="tambah-data.php" class="btn btn-success btn-sm">Tambah Data</a>
<a href="navbar.php" class="btn btn-primary btn-sm">Kembali Ke Menu</a>
</body>
<a href="logout.php" class="btn btn-danger btn-sm">Logout</a>
</html>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <h1></h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>
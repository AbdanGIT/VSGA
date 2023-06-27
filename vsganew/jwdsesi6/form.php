<html>
	<head>
	<title>Membuat Form  </title>
	</head>
	<body>
	<h1>Membuat Form Biodata <br/> ---</h1>
		<?php
		if(isset($_GET['nama'])){
		if($_GET['nama'] == "kosong"){
		echo "<h4 style='color:red'>Nama Belum Di Masukkan !</h4>";
		}
}
		if(isset($_GET['alamat'])){
		if($_GET['alamat'] == "kosong"){
		echo "<h4 style='color:red'>Alamat Belum Di Masukkan !</h4>";
		}
}
		if(isset($_GET['tempat'])){
		if($_GET['tempat'] == "kosong"){
		echo "<h4 style='color:red'>Tempat Belum Di Masukkan !</h4>";
		}
}
		if(isset($_GET['jk'])){
		if($_GET['jk'] == "kosong"){
		echo "<h4 style='color:red'>Jenis Kelamin Belum Di Masukkan !</h4>";
		}
}
		if(isset($_GET['usia'])){
		if($_GET['usia'] == "kosong"){
		echo "<h4 style='color:red'>Usia Belum Di Masukkan !</h4>";
		}
}
?>
	<h4>Isikan Biodata Anda :</h4>
		<form action="tampil.php" method="post">
			<table>
				<tr>
					<td>Nama</td>
					<td><input type="text" name="nama"></td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td><input type="text" name="alamat"></td>
				</tr>
				<tr>
					<td>Tempat</td>
					<td><input type="text" name="tempat"></td>
				</tr>
				<tr>
					<td>Jenis Kelamin</td>
					<td><input type="text" name="jk"></td>
				</tr>
				<tr>
					<td>Usia</td>
					<td><input type="text" name="usia"></td>
				</tr>
				<tr>
					<td><input type="submit" value="Cek"></td>
				</tr>
			</table>
		</form>
	</body>
</html>
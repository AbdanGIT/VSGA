<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tambah Data Barang</title>
</head>
<body>
	<h3>Tambah Data Barang</h3>
		<form method="post" action="simpan.php">
			<table>
				<tr><td>No</td><td><input type="text" onkeyup="isi_otomatis()" name="no" readonly=""></td></tr>
				<tr><td>Nama Merek</td><td><input type="text" name="nama_merk"></td></tr>
				<tr><td>Warna</td><td><input type="text" name="warna"></td></tr>	
				</td></tr>
				<tr><td>Jumlah</td><td><input type="text" name="jumlah"></td></tr>
				<tr><td colspan="2"><button type="submit" value="simpan">Simpan</button></td></tr>
				<tr><td colspan="2"><input type="reset" value="Ulangi"></td></tr>
				<tr><td colspan="2"><input type="button" onclick="location.href='index.php';" value="Kembali" /></td></tr>

			</table>
		</form>
</body>
</html>
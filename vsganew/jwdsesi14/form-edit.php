<?php
include 'koneksi.php';
$id = $_GET['id_siswa'];
$siswa  = mysqli_query($koneksi, "SELECT * from siswa where id_siswa='$id'");
$row = mysqli_fetch_array($siswa);
$agama = array('Islam','Kristen','Hindu','Buddha','Kongghucu');
function active_radio_button($value, $input){
	$result = $value==$input?'checked':'';
	return $result;
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Digital Talent</title>
</head>
<body>
	<form method="post" action="edit.php">
		<h2>Edit Data Siswa</h2>
		<input type="hidden" value="<?php echo $row['id_siswa'];?>" name="id_siswa">
		<table>
			
				<tr><td>Nama</td><td><input type="text" value="<?php echo $row['nama'];?>" name="nama"></td></tr>
				<tr><td>Alamat</td><td><input value="<?php echo $row['alamat'];?>" type="text" name="alamat"></td></tr>
				<tr><td>Jenis Kelamin</td><td>
					<input type="radio" name="jenis_kelamin" value="L" <?php echo active_radio_button("L", $row['jenis_kelamin'])?>>Laki-laki
					<input type="radio" name="jenis_kelamin" value="P" <?php echo active_radio_button("P", $row['jenis_kelamin'])?>>Perempuan
				</td></tr>
				<tr><td>Agama</td><td>
					<select name="agama">
						<?php
						foreach ($agama as $j) {
							echo "<option value='$j' ";
							echo $row['agama']==$j?'selected="selected"':'';
							echo ">$j</option>";
							echo 'alert("Selamat Belajar PHP")';

						}
						?>
					</select>
				</td></tr>
				<tr><td>Sekolah Asal</td><td><input value="<?php echo $row['sekolah'];?>" type="text" name="sekolah"></td></tr>
				<tr><td colspan="2"><button type="submit" class="btn btn-success"   value="simpan">SIMPAN PERUBAHAN</button>
					<tr><td colspan="2"><input type="button" class="btn btn-danger" onclick="location.href='index.php';" value="Kembali" /></td></tr>
		</table>
	</form>
</body>
</html>

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
<?php
include 'koneksi.php';
$id = $_GET['id_mhs'];
$mahasiswa  = mysqli_query($db, "SELECT * from mahasiswa where id_mhs='$id'");
$row = mysqli_fetch_array($mahasiswa);
$jurusan = array('TEKNIK INFORMATIKA','TEKNIK ELEKTRO','REKAMEDIS');
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
		<input type="hidden" value="<?php echo $row['id_mhs'];?>" name="id_mhs">
		<table>
			<tr><td>NIM</td><td><input type="text" value="<?php echo $row['nim'];?>" name="nim"></td></tr>
				<tr><td>NAMA</td><td><input type="text" value="<?php echo $row['nama'];?>" name="nama"></td></tr>
				<tr><td>JENIS KELAMIN</td><td>
					<input type="radio" name="jenis_kelamin" value="L" <?php echo active_radio_button("L", $row['jenis_kelamin'])?>>Laki-laki
					<input type="radio" name="jenis_kelamin" value="P" <?php echo active_radio_button("P", $row['jenis_kelamin'])?>>Perempuan
				</td></tr>
				<tr><td>JURUSAN <?php echo $row['jurusan'];?></td><td>
					<select name="jurusan">
						<?php
						foreach ($jurusan as $j) {
							echo "<option value='$j' ";
							echo $row['jurusan']==$j?'selected="selected"':'';
							echo ">$j</option>";
							echo 'alert("Selamat Belajar PHP")';
							

						}
						?>
					</select>
				</td></tr>
				<tr><td>ALAMAT</td><td><input value="<?php echo $row['alamat'];?>" type="text" name="alamat"></td></tr>
				<tr><td colspan="2"><button type="submit"   value="simpan">SIMPAN PERUBAHAN</button>
					<a href="index.php" class="btn btn-success btn-sm">Kembali</a></td></tr>
		</table>
	</form>
</body>
</html>
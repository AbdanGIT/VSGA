<?php
include 'koneksi.php';
$id_mhs = $_POST['id_mhs'];
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
//query insert data
$query="UPDATE mahasiswa SET nim='$nim',nama='$nama',jurusan='$jurusan',jenis_kelamin='$jenis_kelamin',alamat='$alamat' where id_mhs='$id_mhs'";
mysqli_query($db, $query);
echo "<script>alert('Anda berhasil login');</script>";
		echo "<meta http-equiv='refresh' content='0;
		url=navbar.php?user=$sesi'>";
header("location:index.php");

?>
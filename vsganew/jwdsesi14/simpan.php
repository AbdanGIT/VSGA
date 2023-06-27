<?php
include 'koneksi.php';

if(isset($_POST['tambah'])) {
	$id = $_POST['id_siswa'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$agama = $_POST['agama'];
	$sekolah = $_POST['sekolah'];
	$query="INSERT INTO siswa SET id_siswa='$id_siswa', nama='$nama', alamat='$alamat', jenis_kelamin='$jenis_kelamin', agama='$agama', sekolah='$sekolah'";
	mysqli_query($koneksi, $query);
	
	if($query) {
		header('location:index.php?status=sukses');
	} else {
		header('location:index.php?status=gagal');
	}
}
	
?>

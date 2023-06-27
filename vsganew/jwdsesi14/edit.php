<?php
include 'koneksi.php';
$id = $_POST['id_siswa'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$agama = $_POST['agama'];
$sekolah = $_POST['sekolah'];
//query insert data
$query="UPDATE siswa SET nama='$nama', alamat='$alamat', jenis_kelamin='$jenis_kelamin', agama='$agama', sekolah='$sekolah' where id_siswa='$id'";
mysqli_query($koneksi, $query);
header("location:list-siswa.php");

?>
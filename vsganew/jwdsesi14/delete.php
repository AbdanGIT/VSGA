<?php
include 'koneksi.php';
//menyimpan data id ke dalam variabel
$id_siswa = $_GET['id_siswa'];
//query sql untuk insert data
$query="DELETE FROM siswa WHERE id_siswa='$id_siswa'";
mysqli_query($koneksi, $query);
header("location:list-siswa.php");
?>
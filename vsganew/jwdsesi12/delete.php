<?php
include 'koneksi.php';
//menyimpan data id ke dalam variabel
$id_mhs = $_GET['id_mhs'];
//query sql untuk insert data
$query="DELETE from mahasiswa where id_mhs='$id_mhs'";
mysqli_query($koneksi, $query);
header("location:index.php");
?>
<?php
include 'koneksi.php';
$no= $_POST['no'];
$nama_merk = $_POST['nama_merk'];
$warna = $_POST['warna'];
$jumlah = $_POST['jumlah'];
$query="UPDATE merek SET no='$no', nama_merk='$nama_merk', warna='$warna',jumlah='$jumlah' WHERE no='$no'";
mysqli_query($db, $query);
header("location:index.php")
?>
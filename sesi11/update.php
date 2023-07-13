<?php
include 'koneksi.php';
$no = $_POST['no'];
$nama_merek = $_POST['nama_merek'];
$warna = $_POST['warna'];
$jumlah = $_POST['jumlah'];
$query = "UPDATE printer SET no='$no', nama_merek='$nama_merek', warna='$warna',jumlah='$jumlah' WHERE no='$no'";
mysqli_query($db, $query);
header("location:index.php");

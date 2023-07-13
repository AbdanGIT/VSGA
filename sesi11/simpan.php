<?php
include 'koneksi.php';
$no = $_POST['no'];
$nama_merek = $_POST['nama_merek'];
$warna = $_POST['warna'];
$jumlah = $_POST['jumlah'];
$query = "INSERT INTO printer SET no='$no', nama_merek='$nama_merek', warna='$warna',jumlah='$jumlah'";
mysqli_query($db, $query);
header("location:index.php");

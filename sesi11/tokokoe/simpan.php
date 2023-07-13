<?php
include '..\koneksi.php';
$no = $_POST['no'];
$kode_barang = $_POST['kode_barang'];
$nama_barang = $_POST['nama_barang'];
$jumlah = $_POST['jumlah'];
$query = "INSERT INTO barang SET no='$no', kode_barang='$kode_barang', nama_barang='$nama_barang',jumlah='$jumlah'";
mysqli_query($db, $query);
header("location:index.php");

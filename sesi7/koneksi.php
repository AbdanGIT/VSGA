<?php

$server = "localhost";
$user = "root";
$password = "";
$nama_database = "vsga";

$db = mysqli_connect($server, $user, $password, $nama_database);

echo "Berhasil terhubung ke database";
if (!$db) {
	die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

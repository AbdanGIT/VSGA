<?php
include 'koneksi.php';
$no= $_GET['no'];

$query="DELETE FROM merek WHERE no='$no'";

mysqli_query($db, $query);
header("location:index.php")

?>
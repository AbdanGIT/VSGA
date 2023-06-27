<?php
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$tempat = $_POST['tempat'];
	$jk = $_POST['jk'];
	$usia = $_POST['usia'];
	if($nama == "" ){
	header("location:form.php?nama=kosong");
	}else{
	echo "Nama anda adalah ".$nama. "<br>";
}
if($alamat == "" ){
	header("location:form.php?alamat=kosong");
	}else{
	echo "Alamat anda adalah ". $alamat."<br>";
}
if($tempat == "" ){
	header("location:form.php?tempat=kosong");
	}else{
	echo "Tempat anda adalah ". $tempat."<br>";
}
if($jk == "" ){
	header("location:form.php?jk=kosong");
	}else{
	echo "Jenis Kelamin anda adalah ". $jk."<br>";
}
if($usia == "" ){
	header("location:form.php?usia=kosong");
	}else{
	echo "Usia anda adalah ". $usia."<br>";
}
	
	
?>
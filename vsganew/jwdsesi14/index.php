	<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	
	<h3>Pendaftaran Siswa Baru</h3>
	<h1>Digital Talent</h1>
	<p><b>Menu</p>
		<ul>
			<li><a href="form-data.php"><u>Daftar Baru</u></a></li>
			<li><a href="list-siswa.php"><u>Pendaftar</u></a></li>
		</ul>
</body>
</html>

<?php if(isset($_GET['status'])) { ?>
		<?php if($_GET['status'] == 'sukses') {
			echo "Anda berhasil Terdaftar!";
		} else {
			echo "Anda gagal Terdaftar!";
		}
	?>

<?php } ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>
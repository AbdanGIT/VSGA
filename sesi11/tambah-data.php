<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Tambah Data Barang</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
	<div class="container mt-3 border">
		<h3 class="mt-4">Tambah Data Barang</h3>
		<form method="post" action="simpan.php">
			<div class="form-group row">
				<label for="no" class="col-sm-2 col-form-label">No</label>
				<div class="col-sm-10">
					<input type="text" onkeyup="isi_otomatis()" name="no" readonly="" class="form-control">
				</div>
			</div>
			<div class="form-group row">
				<label for="nama_merek" class="col-sm-2 col-form-label">Nama Merek</label>
				<div class="col-sm-10">
					<input type="text" name="nama_merek" class="form-control">
				</div>
			</div>
			<div class="form-group row">
				<label for="warna" class="col-sm-2 col-form-label">Warna</label>
				<div class="col-sm-10">
					<input type="text" name="warna" class="form-control">
				</div>
			</div>
			<div class="form-group row">
				<label for="jumlah" class="col-sm-2 col-form-label">Jumlah</label>
				<div class="col-sm-10">
					<input type="text" name="jumlah" class="form-control">
				</div>
			</div>
			<div class="form-group row justify-content-end">
				<button type="submit" value="simpan" class="btn btn-primary mr-2">Simpan</button>
				<input type="reset" value="Ulangi" class="btn btn-warning mr-2">
				<input type="button" onclick="location.href='index.php';" value="Kembali" class="btn btn-secondary mr-2" />
			</div>
	</div>
	</form>
	</div>

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
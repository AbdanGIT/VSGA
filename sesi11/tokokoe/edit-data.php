<?php
include '..\koneksi.php';
$no = $_GET['no'];
$kode_barang = mysqli_query($db, "SELECT * from barang where no='$no'");
$row = mysqli_fetch_array($kode_barang);
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Edit Data Barang</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container border">
        <h3 class="mt-4">Edit Data Barang</h3>
        <form method="post" action="update.php">
            <table class="table">
                <tr>
                    <td>No</td>
                    <td><input type="text" value="<?php echo $row['no']; ?>" name="no" readonly="" class="form-control"></td>
                </tr>
                <tr>
                    <td>Kode Barang</td>
                    <td><input type="text" value="<?php echo $row['kode_barang']; ?>" name="kode_barang" class="form-control" required></td>
                </tr>
                <tr>
                    <td>Nama Barang</td>
                    <td><input value="<?php echo $row['nama_barang']; ?>" type="text" name="nama_barang" class="form-control" required></td>
                </tr>
                <tr>
                    <td>Jumlah</td>
                    <td><input value="<?php echo $row['jumlah']; ?>" type="text" name="jumlah" class="form-control" required></td>
                </tr>
                <tr>
                    <td></td>
                    <td class="d-flex justify-content-end">
                        <div>
                            <button type="submit" value="simpan" class="btn btn-primary">SIMPAN PERUBAHAN</button>
                            <a href="index.php" class="btn btn-secondary ml-2">Kembali</a>
                        </div>
                    </td>
                </tr>
            </table>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
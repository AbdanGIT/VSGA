<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>List Barang</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container p-3 border">
        <h2 class="mt-4">List Barang</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Merek</th>
                    <th>Warna</th>
                    <th>Jumlah</th>
                    <th style="width: 20%;">Opsi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'koneksi.php';
                $merek = mysqli_query($db, "SELECT * from printer");
                $no = 1;
                foreach ($merek as $row) { ?>
                    <tr>
                        <td><?= $no ?></td>
                        <td><?= $row['nama_merek'] ?></td>
                        <td><?= $row['warna'] ?></td>
                        <td><?= $row['jumlah'] ?></td>
                        <td>
                            <a href='edit-data.php?no=<?= $row['no']; ?>' class="btn btn-primary">Edit</a>
                            <a href='hapus-data.php?no=<?= $row['no']; ?>' class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</a>
                        </td>
                    </tr>
                <?php
                    $no++;
                }
                ?>
            </tbody>
        </table>
        <a href="tambah-data.php" class="btn btn-success">Tambah Data</a>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
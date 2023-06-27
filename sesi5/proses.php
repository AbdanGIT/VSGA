<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Biodata Diri</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="bg-secondary">
        <div class="container mt-5 ">
            <div class="card">
                <div class="card-body">
                    <h1 class="card-title text-center mb-4">Hasil Biodata Diri</h1>
                    <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $nama = $_POST["nama"];
                        $alamat = $_POST["alamat"];
                        $kota = $_POST["kota"];
                        $jenis_kelamin = $_POST["jenis_kelamin"];
                        $usia = $_POST["usia"];

                        echo "<p><strong>Nama:</strong> $nama</p>";
                        echo "<p><strong>Alamat:</strong> $alamat</p>";
                        echo "<p><strong>Kota:</strong> $kota</p>";
                        echo "<p><strong>Jenis Kelamin:</strong> $jenis_kelamin</p>";
                        echo "<p><strong>Usia:</strong> $usia</p>";
                    }
                    ?>
                    <a href="biodata.php" class="btn btn-secondary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Biodata Diri</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .container {
            margin-top: 50px;
        }

        .card {
            max-width: 400px;
            margin: 0 auto;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .card-title {
            background-color: #007bff;
            color: #fff;
            padding: 20px;
            font-size: 24px;
            text-align: center;
            margin-bottom: 20;
        }

        .card-body {
            padding: 30px;
        }

        .profile-info {
            margin-bottom: 20px;
        }

        .profile-info strong {
            width: 100px;
            display: inline-block;
        }

        .btn {
            width: 100%;
        }
    </style>
</head>

<body class="bg-secondary">
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h1 class="card-title md-3">Hasil Biodata Diri</h1>
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $nama = $_POST["nama"];
                    $alamat = $_POST["alamat"];
                    $tempat = $_POST["tempat"];
                    $jenis_kelamin = $_POST["jenis_kelamin"];
                    $usia = $_POST["usia"];
                ?>
                    <div class="profile-info">
                        <strong>Nama:</strong> <?php echo $nama ?>
                    </div>
                    <div class="profile-info">
                        <strong>Alamat:</strong> <?php echo $alamat ?>
                    </div>
                    <div class="profile-info">
                        <strong>Tempat:</strong> <?php echo  $tempat ?>
                    </div>
                    <div class="profile-info">
                        <strong>Jenis Kelamin:</strong> <?php echo  $jenis_kelamin ?>
                    </div>
                    <div class="profile-info">
                        <strong>Usia:</strong> <?php echo  $usia ?>
                    </div>
                    <a href="biodata.php" class="btn btn-primary">Kembali</a>

                <?php } ?>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
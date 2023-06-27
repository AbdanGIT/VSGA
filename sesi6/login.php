<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link href="style.css" rel="stylesheet" />

  <title>Form Login</title>
</head>

<body>
  <div class="container mt-5">
    <div class="card" style="max-width: 30rem; margin: 0 auto;">
      <div class="card-body">
        <h1 class="card-title text-center mb-3">Login</h1>
        <form method="post" action="cek_login.php">
          <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username">
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="pass" name="pass">
          </div>
          <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-secondary">kembali</button>
            <button type="submit" class="btn btn-primary">Kirim</button>
          </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
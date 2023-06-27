<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link href="form.php" />
    <link rel="stylesheet" href="style.css">
  </head>
  <style>
    body
        {
            background-image: url('images/p.jpg');
            background-repeat: no-repeat;
            background-size: auto;
        }
  </style>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Digital Talent</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#nav-home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"> List Data </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="index.php">Data Mahasiswa</a></li>
                <li><a class="dropdown-item" href="#">Data Dosen</a></li>
                <li><a class="dropdown-item" href="#">Data Staff</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact Us</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel">
    <h4>Selamat Datang Admin</h4>
  </div>
</div>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>

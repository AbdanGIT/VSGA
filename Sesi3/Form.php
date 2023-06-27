<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="Boostrap/css/bootstrap.min.css">
  <title>Form</title>
</head>

<body>


  <?php include('Navbar.php'); ?>


  <div class="container">
    <h1>Digital Talent : | Membuat Form dengan Bootstrap</h1>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Nama Anda</label>
      <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlTextarea1" class="form-label">Alamat Anda</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    <form>
      <div class="mb-3">
        <select class="form-select">
          <option>Pria</option>
          <option>Wanita</option>
        </select>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>
</div>

<script src="boostrap/js/bootstrap.bundle.min.js"></script>

</html>
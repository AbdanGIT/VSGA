<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body>
  <h3>Formulir Pendaftaran Siswa Baru</h3>
    <form method="post" action="simpan.php">
      <table>
        <tr><td>Nama :</td><td><input type="text" name="nama" placeholder="nama lengkap"></td></tr>
        <tr><td>Alamat : </td><td><textarea name="alamat"></textarea></td></tr>
        <tr><td>Jenis Kelamin :</td><td>
          <input type="radio" name="jenis_kelamin" value="L">Laki-laki
          <input type="radio" name="jenis_kelamin" value="P">Perempuan
        </td></tr>
        <tr><td>Agama :</td><td>
          <select name="agama">
            <option value="Islam">Islam</option>
            <option value="Kristen">Kristen</option>
            <option value="Hindu">Hindu</option>
            <option value="Buddha">Buddha</option>
            <option value="Kongghucu">Kongghucu</option>
          </select>
        </td></tr>
        <tr><td>Sekolah Asal :</td><td><input type="text" name="sekolah" placeholder="nama sekolah"></td></tr>
        <tr><td colspan="2"><button type="submit" name="tambah" class="btn btn-success" value="simpan">Daftar</button></td></tr>
        <tr><td colspan="2"><input type="button" class="btn btn-danger" onclick="location.href='index.php';" value="Kembali" /></td></tr>
      </table>
    </form>
</body>
</html>

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
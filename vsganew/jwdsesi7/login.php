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
    <div class="global-container">
      <div class="card login-form">
        <div class="card-body">
          <h1>LOGIN</h1>
        </div>
        <div class="card-text">
          <form method="post" action="cek_login.php">
            <label>Username</label><br>
            <input type="text" name="user"><br>

           <label>Password</label><br>
          <input type="password" name="pass"><br>

          <button type="submit" name="submit">Login</button>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>

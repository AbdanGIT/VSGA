<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width-device-width, initial-sclae=1">
	<title>Login</title>
	<style>
		body
        {
            background-image: url('images/p.jpg');
            background-repeat: no-repeat;
            background-size: auto;
        }
	</style>
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<div style="color: white; position: absolute; left: 400px; top: 120px; font-size: 50px; ">ADMIN PERPUSTAKAAN</div>
	<div class="container">
		<h1 style="color: white;"><center>Login</center></h1>
		<form method="post" action="cek_login.php">
			<label>Username</label><br>
			<input type="text" name="user"><br>

			<label>Password</label><br>
			<input type="password" name="pass"><br>

			<button type="submit" style="color: white;" name="submit">Login</button>
		</form>
	</div>
</body>

</html>


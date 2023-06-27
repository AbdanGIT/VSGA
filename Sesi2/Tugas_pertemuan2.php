<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 500px;
            margin: 0;
            padding: 20px;
            border: 2px solid black;
            border-radius: 5px;
        }

        .container h5 {
            text-align: center;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .form-group input {
            width: 400px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .form-group button {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 4px;
            background-color: #4CAF50;
            color: #fff;
            cursor: pointer;
        }

        .form-group button:hover {
            background-color: #45a049;
        }

        a {
            color: #0000FF;
            /* Warna teks tautan */
            text-decoration: none;
            /* Menghilangkan garis bawah pada tautan */
        }

        a:hover {
            color: #FF0000;
            /* Warna teks tautan saat dihover */
            text-decoration: underline;
            /* Menambahkan garis bawah saat tautan dihover */
        }

        a:visited {
            color: #800080;
            /* Warna teks tautan yang sudah dikunjungi */
        }

        .container .card {
            margin: 0;
            background-color: white;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="card">
            <h1>Registrasi</h1>
            <h4>Please fill in this form to create an account</h4>
            <hr>
            <form id="registrationForm">
                <div class="form-group">
                    <label for="username">Email:</label>
                    <input type="text" id="email" name="email" placeholder="Enter Email" required>
                </div>
                <div class="form-group">
                    <label for="username">Password:</label>
                    <input type="text" id="password1" name="password1" placeholder="Enter Password" required>
                </div>
                <div class="form-group">
                    <label for="username">Reapet Password:</label>
                    <input type="text" id="password2" name="password2" placeholder="Reapet Password" required>
                </div>
                <hr>
                <div class="form-group">
                    <small>By creating an account you agree to our <a href="">Terms & Privacy</a></small>
                </div>
                <div class="form-group">
                    <button type="submit">Registrasi</button>
                </div>
            </form>
        </div>
        <div class="form-group">
            <h5>already have an account?<a href="">Sign in</a></h5>
        </div>
    </div>
</body>

</html>
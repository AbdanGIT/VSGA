<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Boostrap/css/bootstrap.min.css">
    <title>Navbar</title>
</head>

<body>
    <?php include('Navbar.php'); ?>
    <div class="container">
        <!-- Content here -->
        <div class="container">
            <div class="row text-center">
                <legend>DIGITAL TALENT : | Grid Dengan Boostrap</legend>
            </div>
            <div class="row">
                <div class="col" style="background-color: green;">
                    <h1>Ini Header</h1>
                </div>
            </div>
            <div class="row">
                <div class="col" style="background-color: yellow;">
                    Ini Menu
                </div>
            </div>
            <div class="row">
                <div class="col-4" style="background-color: orange; height: 300px;">
                    Ini Sidebar
                </div>
                <div class="col-8" style="background-color: red; height: 300px">
                    Ini content
                </div>
            </div>
            <div class="row">
                <div class="col" style="background-color: blue; height: 50px;">
                    Ini Footer
                </div>
            </div>


        </div>
        <script src="boostrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>
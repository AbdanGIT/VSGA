<!-- 
Algoritma Membuat Luas Lingkaran

1.buat variable float phi = 3.14 , jarijari,luas
2.Masukkan Jari Jari Lingkaran dari pengguna
2.Masukkan Jari jari dari pengguna ke dalam variable jari2
3.Buat Rumus luas Lingkaran "luas = π(3.14) *jarijari * jarijari"
4.simpan hasil perhitungan luas ke dalam variable 'Luas'
5.Tampilkan Hasil 'Luas' ke pengguna

-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menghitung Luas Lingkaran</title>
</head>

<body>
    <h1>Menghitung Luas Lingkaran</h1>
    <form action="" method="get">
        <label for="Jari2">Masukkan Jari Jari Lingkaran</label>
        <input type="text" name="jariJari">
        <button type="submit">Hitung</button>
    </form>

    <?php
    if (isset($_GET['jariJari'])) {
        $jariJari = $_GET['jariJari'];
        $luas = hitungLuasLingkaran($jariJari);
        echo "Jari Jari lingkaran adalah: " . $jariJari . "<br>";
        echo "Luas lingkaran adalah: " . $luas;
    }

    function hitungLuasLingkaran($jariJari)
    {
        $luas = M_PI * ($jariJari * $jariJari);
        return $luas;
    }
    ?>
</body>

</html>
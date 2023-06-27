<?php
include 'koneksi.php';
$no         = $_GET['no'];
$nama_merk  = mysqli_query($db, "SELECT * from merek where no='$no'");
$row        = mysqli_fetch_array($nama_merk);

?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <form method="post" action="update.php">
            
            <table>
                <tr><td>No</td><td><input type="text" value="<?php echo $row['no'];?>" name="no" readonly=""></td></tr>
                <tr><td>Nama Merek</td><td><input type="text" value="<?php echo $row['nama_merk'];?>" name="nama_merk"></td></tr>
                <tr><td>Warna</td><td><input value="<?php echo $row['warna'];?>" type="text" name="warna"></td></tr>
                <tr><td>Jumlah</td><td><input value="<?php echo $row['jumlah'];?>" type="text" name="jumlah"></td></tr>
                <tr><td colspan="2"><button type="submit" value="simpan">SIMPAN PERUBAHAN</button>
                        <a href="index.php">Kembali</a></td></tr>
            </table>
        </form>
    </body>
</html>
<?php
function hitungUmur($thn_lahir, $thn_sekarang)
{
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}

function perkenalan($nama, $salam = "selamat Datang")
{
    echo $salam . ",";
    echo "perkenalkan Nama saya " . $nama . "<br>";
    // memanggil fungsi lain
    echo "saya berusia " . hitungUmur(1992, 2023) . "tahun<br>";
}

perkenalan("komang");

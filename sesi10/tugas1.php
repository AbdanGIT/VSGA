<?php
$nilai = 110;
switch (true) {
    case ($nilai > 100 && $nilai <= 120):
        $index = "S";
        break;
    case ($nilai >= 85 && $nilai <= 100):
        $index = "A";
        break;
    case ($nilai >= 70 && $nilai < 85):
        $index = "B";
        break;
    case ($nilai >= 50 && $nilai < 70):
        $index = "C";
        break;
    case ($nilai >= 30 && $nilai < 50):
        $index = "D";
        break;
    default:
        $index = "E";
        break;
}

echo "Nilai anda adalah : " . $nilai;
echo "<br />";
echo "Dengan index     : " . $index;

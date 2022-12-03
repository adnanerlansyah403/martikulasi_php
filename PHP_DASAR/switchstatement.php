<?php 

$nilai = 70;

switch ($nilai) {
    case $nilai >= 80:
        echo "Nilai Anda A" . PHP_EOL;
        break;
    case $nilai >= 70:
    case $nilai >= 60:
        echo "Anda Lulus" . PHP_EOL;
        break;
    default:
        echo "Maaf Anda Tidak Lulus" . PHP_EOL;
        break;
}

// syntax alternatif

switch ($nilai) :
    case $nilai >= 80:
        echo "Nilai Anda A" . PHP_EOL;
        break;
    case $nilai >= 70:
    case $nilai >= 60:
        echo "Anda Lulus" . PHP_EOL;
        break;
    default:
        echo "Maaf Anda Tidak Lulus" . PHP_EOL;
        break;
endswitch;

?>
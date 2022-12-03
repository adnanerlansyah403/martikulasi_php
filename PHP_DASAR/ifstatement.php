<?php 

$nilai = 80;
$absen = 90;

if($nilai >= 80 && $absen >= 80) {
    echo "Nilai Anda A " . PHP_EOL;
} else if($nilai >= 70 && $absen >= 70) {
    echo "Nilai Anda B " . PHP_EOL;
} else if($nilai >= 60 && $absen >= 60) {
    echo "Nilai Anda C " . PHP_EOL;
} else if($nilai >= 50 && $absen >= 50) {
    echo "Nilai Anda D " . PHP_EOL;
} else {
    echo "Maaf, Anda tidak Lulus" . PHP_EOL;
}

// syntax alternatif

if($nilai >= 80 && $absen >= 80) :
    echo "Nilai Anda A" . PHP_EOL;
elseif($nilai >= 70 && $absen >= 70) :
    echo "Nilai Anda B" . PHP_EOL;
else :
    echo "Maaf anda tidak lulus" . PHP_EOL;
endif



?>
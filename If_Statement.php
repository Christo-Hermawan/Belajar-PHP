<?php

$nilai = 90;
$absen = 70;

if ($nilai >= 75 && $absen >= 75) {

    echo "Anda Lulus" . PHP_EOL;
}else { 
    echo "Anda Tidak Lulus" . PHP_EOL;
}

// Else If statement

if ($nilai >= 80 && $absen >= 80) {
    echo "Nilai Anda A" . PHP_EOL;
} elseif ($nilai >= 70 && $absen >= 70) {
    echo "Nilai Anda B" . PHP_EOL;
}elseif ($nilai >= 60 && $absen >= 60) {
    echo "Nilai Anda C" . PHP_EOL;
}elseif ($nilai >= 50 && $absen >= 50) {
    echo "Nilai Anda D" . PHP_EOL;
}else {
    echo "Nilai Anda F" . PHP_EOL;
}

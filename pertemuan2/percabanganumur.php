<?php

// readline() digunakan untuk mrmbaca input pengguna
$umur = 99;

if ($umur == 0) {
    echo "Usia Bayi";
} elseif ($umur >= 1 && $umur <= 12) {
    echo "Usia Anak Anak";
} elseif ($umur >= 13 && $umur <= 17) {
    echo "Usia Remaja";
} elseif ($umur >= 18 && $umur <= 50) {
    echo "Usia Dewasa";
} elseif ($umur >= 51) {
    echo "Lansia";
} else {
    echo "_" ;
}
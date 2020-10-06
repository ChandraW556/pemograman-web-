<?php
/*
Buat Halaman Untuk mengisi Luas Segitiga inputan berasal
dari kode program 
Luas Segitiga
alas =10
tinggi= 20
luas = 100
*/

function LuasSegitiga($alas, $tinggi)
{
    $luas_segitiga = ($alas * $tinggi);
    return $luas_segitiga;
}

$segitiga = LuasSegitiga(10, 20) * 0.5;

echo "Luas Segitiga : $segitiga<br/>";

<?php
$namaServer = "localhost";
$username   = "root";
$password = "";
$namaDB = "weblanjut";
//Membuat koneksi 
$conn = mysqli_connect($namaServer, $username, $password, $namaDB);
//Check Koneksi
if (!$conn) {
    die("konkesi Gagal");
}

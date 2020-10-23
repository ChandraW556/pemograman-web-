<?php
include("koneksi.php");

if (isset($_POST['kodemk'])) {

    $id = $_POST['id'];
    $kodemk = $_POST['kodemk'];
    $namamk = $_POST['namamk'];
    $kategori = $_POST['kategori'];
    $sks = $_POST['sks'];


    $strsql = "UPDATE matakuliah SET kodemk='$kodemk', namamk='$namamk', kategori='$kategori', sks='$sks' WHERE id=$id";
    $runSQL = mysqli_query($conn, $strsql);

    if ($runSQL) {
        header('Location: listmatakuliah.php?status=sukses');
    } else {
        die("Location: listmatakuliah.php?status=gagal");
    }
} else {
    die("Akses dilarang...");
}

<?php

include("koneksi.php");

if (isset($_GET['id'])) {


    $id = $_GET['id'];

    $strsql = "DELETE FROM matakuliah WHERE id =$id";
    $runSQL = mysqli_query($conn, $strsql);

    if ($runSQL) {
        header('Location: listmatakuliah.php');
    } else {
        die("gagal menghapus...");
    }
} else {
    die("akses dilarang...");
}
?>

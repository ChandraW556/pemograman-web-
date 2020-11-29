<?php
    include 'koneksi.php';
    if (isset($_GET["kodemk"])) {
    $kodemk   = $_GET['kodemk'];
    // query SQL untuk insert data
    $sql="DELETE from matakuliah where id='".$kodemk."'";

        if (mysqli_query($conn, $sql)) {
            header("location: listmatakuliah.php?sukseshapus");
        }
        else {
            header("location: listmatakuliah.php?gagalhapus");
        }
    }
    else {
        echo "Gagal";
    }
?>
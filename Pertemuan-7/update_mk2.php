<?php
    include_once "koneksi.php";
    if (isset($_POST["kode"])) {
        $kode = $_POST["kode"];
        $nama = $_POST["nama"];
        $kategori = $_POST["kategori"];
        $sks = $_POST["sks"];
        $id = $_POST["id"];
        
        $sql = "UPDATE matakuliah SET kode='".$kode."', nama='".$nama."', kategori='".$kategori."', sks='".$sks."' WHERE id='".$id."'";

        $runSQL = mysqli_query($conn, $sql);
        if ($runSQL) {
            header("location: edit_mk2.php?suksesedit");
        }
        else {
            header("location: edit_mk2.php?gagaledit");
        }
    }
?>
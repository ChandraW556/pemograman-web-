<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Konfirmasi Pendaftaran</title>
</head>
<body>
<?php

    include_once "koneksi.php";

    if (isset($_POST['tombolSubmit'])) {
        $kode = $_POST['kode'];
        $nama = $_POST['nama'];
        $kategori = $_POST['kategori'];
        $sks = $_POST['sks'];
        

        $sql = "INSERT INTO matakuliah (kode, nama, kategori, sks)
        VALUES ('$kode', '$nama', '$kategori', '$sks')";

        if (mysqli_query($conn, $sql)) {
            echo "Data berhasil diinput";
        }
        else {
            echo "Data tidak berhasil diinput pada string sql: <br>
            $sql <br> , dg error: " .mysqli_error($conn);
            // echo "Data tidak berhasil diinput, dg error: " .mysqli_error($conn);
        }
    
?>
    <br>
    kode: <?php echo $kode ?>
    <br>
    nama: <?php echo $nama ?>
    <br>
    kategori: <?php echo $kategori ?>
    <br>
    sks: <?php echo $sks ?>
<?php
   }
   else{
    echo "Mohon maaf konfirmasi tidak bs diakses langsung";
   }
?>
</body>
</html>
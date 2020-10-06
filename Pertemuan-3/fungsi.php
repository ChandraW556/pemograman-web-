<?php
//Fungsi Yang tidak return value 
function fungsiku($namaDepan, $namaBelakang = "Smith")
{
    // Kode program fungsi 
    echo "Halo Fungsi";
    echo "<br> Nama Saya " . $namaDepan . " " . $namaBelakang;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Belajar Funtion PHP Bersama saya </title>
</head>

<body>
    <?php
    fungsiku("Chandra", "Wijaya")
    ?>
    <?php
    fungsiku("Anto")
    ?>
    <?php
    fungsiku('Andi ')
    ?>
    <?php
    fungsiku("Wati ")
    ?>
</body>

</html>
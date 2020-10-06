<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Konfirmasi Pendaftaran</title>
</head>
<body>
<?php
    if (isset($_POST['tombolSubmit'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $namaDepan = $_POST['namaDepan'];
        $namaBelakang = $_POST['namaBelakang'];
    
?>
    username: <?php echo $username ?>
    <br>
    password: ******
    <br>
    nama lengkap: <?php echo $namaDepan." ".$namaBelakang ?>
    <br>
    email: <?php echo $email ?>
<?php
    }
?>
</body>
</html>
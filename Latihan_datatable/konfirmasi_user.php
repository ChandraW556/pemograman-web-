
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Konfirmasi Registrasi</title>
</head>
<body>
<?php
    include_once "koneksi.php";
    if (isset($_POST['tombolSubmit'])) {
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $prodi = $_POST['prodi'];
        $password = $_POST['password'];
    
        $sql = "INSERT INTO user_akses (nim, nama, prodi, password)
        VALUES ('$nim','$nama','$prodi','$password')";

        if(mysqli_query($conn, $sql)){
            echo "Data berhasil diinput";
        }
        else {
            echo "Data tidak berhasil diinput pada string sql: <br> $sql <br>, dg error:".mysqli_error($conn);
        }

?>
    <h2>Thank You <?php echo $_POST['nama']; ?> </h2>

    <p>You have been registered as
        <?php echo $_POST['nama']; ?>
    </p>

    <p>Go <a href="listuser.php">back</a> to Login</p>
<?php
   }
   else{
    echo "Mohon maaf konfirmasi tidak bs diakses langsung";
   }
?>
</body>
</html>
<?php
session_start();

if (isset($_POST['tombolSubmit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == "anto" && $password == "123") {
        //echo "Sukses";
        $_SESSION["sessionUsername"] = $username;
        header("Location: dashboard.php");
    }
    else {
        echo "Username / Password ada yg salah";
    }
}
else {
    header("Location: login.php");
}


?>

<?php

if (isset($_POST['tombolsubmit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == "anto" && $password == "123") {
        echo "Sukses";
    }
    else {
        echo "Username / Password ada yang salah ";
    }
}
else {
    echo " Mohon maaf cek login tidak bisa di akses langsung ";
}
?>
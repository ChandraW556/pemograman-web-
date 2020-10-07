<?php
//------------------------
//------GET Dan POST------
//------------------------

// if (isset($_GET)['submit]) ){
//  echo $_GET['password'];
//}
$user = 'alif';
$password = '123';

if (isset($_POST['submit']) ){
    if( $_POST['nama'] == $user && 
    $_POST['password'] == $password){

    //cookie
    //setcookie(key, nilai, expire)
    setcookie('nama_user', $_POST['nama'], time()+120);
    
    //session
    $_SESSION['nama_user'] = $_POST['nama'];

    header('Location: profile.php');

    }else{
        echo 'login gagal!';
    }

}

?>

<form action="profile.php" method="get">
    <input type="text" name="nama">
    <input type="password" name="password">
    <input type="submit" name="submit">
</form>
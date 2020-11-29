<?php
if (isset($_POST['tombol'])) {
    $data_email = "test@test.com";
    $str_pwd = "123";
    $salt = "zxcvbnm,./";
    $data_pwd = sha1($str_pwd.$salt);
    //echo $data_pwd;
    $email = $_POST['email'];
    $email = filter_var($email,FILTER_SANITIZE_STRING);
    $pwd = $_POST['pwd'];
    $pwd = filter_var($pwd,FILTER_SANITIZE_STRING);
    $pwd = sha1($pwd.$salt);
   
   if (!strcmp($data_email,$email) && (!strcmp($data_pwd,$pwd))) {
       // echo "email dan password sama";       
       session_start();
       $str_token = "qwerty123";
      
       setcookie("cookietoken",$str_token, time() + 60,"/");
       //input data ke session
       $_SESSION['session_email'] = $data_email;
       $_SESSION['session_token'] = $str_token;
       
       if (isset($_POST['rememberme'])) {
            if ($_POST['rememberme'] == "1") {
                setcookie("cookieemail",$data_email, time() + 86400,"/");
                setcookie("cookiepwd",$_POST['pwd'], time() + 86400,"/");
                setcookie("cookierememberme",$_POST['rememberme'], time() + 86400,"/");
            }           
        }
        else {
            setcookie("cookieemail","", time() - 3600,"/");
            setcookie("cookiepwd","", time() - 3600,"/");
            setcookie("cookierememberme","", time() - 3600,"/");
        }
       // echo $_COOKIE['cookieemail'];
       header('Location: dashboard.php');
   }
}
?>
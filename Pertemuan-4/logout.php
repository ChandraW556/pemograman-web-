<?php 
    session_start();
    session_unset();
    session_destroy();
    if (!isset($_SESSION["sessionUsername"])) {
       header("Location: login.php");
       //echo "session sudah didestroy";
    }
    
?>
<?php 
session_start();
if (!isset($_SESSION["sessionUsername"])) {
    header("Location: login.php");
}

echo "ini session ".$_SESSION["sessionUsername"];
?>
<a href="logout.php">Logout</a>
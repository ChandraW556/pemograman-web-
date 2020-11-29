<?php
session_start();

session_unset();
session_destroy();

setcookie("cookietoken", "" , time() - 3600);
include "checkauthentication.php";

?>
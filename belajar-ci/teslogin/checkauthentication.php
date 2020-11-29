<?php
session_start();
if (($_SESSION['session_email']) && isset($_COOKIE["cookietoken"])) {
	if (($_SESSION['session_token'] == $_COOKIE["cookietoken"])) {
	}
	else {
		header('Location: login.php');
	}
}
else {
	header('Location: login.php');
}

?>
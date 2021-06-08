<?php
require_once "includes/header.php";

// Cookies destroy
setcookie('mail','',time()-3600);
setcookie('pw','',time()-3600);
$_SESSION = array();

// Session destroy
session_destroy();
header("Location: $link/index");
?>
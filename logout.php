<?php
require_once "includes/header.php";

// Cookies
setcookie('mail','',time()-3600);
setcookie('pw','',time()-3600);
$_SESSION = array();

// Session
session_destroy();
header("Location: $link/index");
?>
<?php
session_start();
setcookie('mail','',time()-3600);
setcookie('pw','',time()-3600);
$_SESSION = array();
session_destroy();
header("Location: /index");
?>
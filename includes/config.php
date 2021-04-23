<?php 
// Login to database (host, database name, database user, database password).
$db = new PDO('mysql:host=localhost;dbname=pcms;charset=utf8', 'root', '');

// User call.
if(isset($_SESSION['id'])) { 
$requser = $db->prepare("SELECT * FROM users WHERE id = ?");
$requser->execute(array($_SESSION['id']));
$user = $requser->fetch();
}

// Config call.
$reqconfig = $db->prepare("SELECT * FROM config WHERE id = ?");
$reqconfig->execute(array(1));
$config = $reqconfig->fetch();

// Website name call.
$title = $config['wsname'];

// Website description call.
$descr = $config['wsdescr'];

// Website Link call.
$link = $config['wslink'];

// Theme call.
$theme = $config['wstheme'];

// Langage call.
$lang = $config['wslang'];
?>
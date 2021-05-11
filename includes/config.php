<?php
// Database driver (default: mysql).
$dbdriver="mysql";
// Database host (default: localhost).
$dbhost="localhost";
// Database name (default: pcms).
$dbname="pcms";
// Database user (default: root).
$dbuser="root";
// Database password.
$dbpw="";
// Database port (default: 3306).
$dbport="3306";
try {
    $db = new PDO("$dbdriver:host=$dbhost;port=$dbport;dbname=$dbname;charset=utf8", $dbuser, $dbpw);
}
catch(PDOException $e) {
    print("<b>ERROR</b>: ".$e->getMessage());
    exit;
}

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

// Website name.
$title = $config['wsname'];

// Website description.
$descr = $config['wsdescr'];

// Website link.
$link = $config['wslink'];

// Website theme.
$theme = $config['wstheme'];

// Website language.
$lang = $config['wslang'];

// CMS version.
$version = $config['wsversion'];

// Timezone.
$timezone = $config['wstimezone'];
date_default_timezone_set("$timezone");
?>
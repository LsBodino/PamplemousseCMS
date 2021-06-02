<?php
require_once 'libs/Autoloader.php';
Smarty_Autoloader::register();
$smarty = new SmartyBC;
$smarty->debugging = false;
$smarty->caching = false;

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
    $lastlogin = $db->prepare("UPDATE users SET lastlogin = ? WHERE id = ?");
    $lastlogin->execute(array(time(), $_SESSION['id']));
    $requser = $db->prepare("SELECT * FROM users WHERE id = ?");
    $requser->execute(array($_SESSION['id']));
    $smarty->assign('requser', $requser);
    $user = $requser->fetch();
}

// Config call.
$reqconfig = $db->prepare("SELECT * FROM config WHERE id = ?");
$reqconfig->execute(array(1));
$config = $reqconfig->fetch();

// Website name.
$title = $config['wsname'];
$smarty->assign('title', $title);

// Website description.
$descr = $config['wsdescr'];
$smarty->assign('descr', $descr);

// Website link.
$link = $config['wslink'];
$smarty->assign('link', $link);

// Website theme.
$theme = $config['wstheme'];
$smarty->assign('theme', $theme);

// Website language.
$lang = $config['wslang'];
$smarty->assign('lang', $lang);

// CMS version.
$version = $config['wsversion'];
$smarty->assign('version', $version);

// Website timezone.
$timezone = $config['wstimezone'];
$smarty->assign('timezone', $timezone);
date_default_timezone_set("$timezone");

// Lang call.
$reqlang = $db->prepare("SELECT * FROM lang WHERE id = ?");
$reqlang->execute(array("$lang"));
$lg = $reqlang->fetch();
?>
<?php
session_start();
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
catch(PDOException $e){
    print("<b>ERROR</b>: ".$e->getMessage());
    exit;
}

if(isset($_SESSION['id'])){ 

    // Last login
    $lastlogin = $db->prepare("UPDATE users SET lastlogin = ? WHERE id = ?");
    $lastlogin->execute(array(time(), $_SESSION['id']));

    // User
    $user_req = $db->prepare("SELECT * FROM users WHERE id = ?");
    $user_req->execute(array($_SESSION['id']));
    $smarty->assign('user_req', $user_req);
    $user = $user_req->fetch();
    $user_id = $user['id'];

    // Rank
    $rank_req = $db->prepare("SELECT * FROM users_ranks WHERE id = ?");
    $rank_req->execute(array($user['rank']));
    $smarty->assign('rank_req', $rank_req);
    $rank = $rank_req->fetch();

    // Ban
    if($user['ban'] == 1){
        header("Location: $link/logout");
    }
}

// Config
$config_req = $db->prepare("SELECT * FROM config WHERE id = ?");
$config_req->execute(array(1));
$config = $config_req->fetch();

// Website name
$title = $config['wsname'];
$smarty->assign('title', $title);

// Website description
$descr = $config['wsdescr'];
$smarty->assign('descr', $descr);

// Website link
$link = $config['wslink'];
$smarty->assign('link', $link);

// Website theme
$theme = $config['wstheme'];
$smarty->assign('theme', $theme);

// Panel theme
$paneltheme = $config['wspaneltheme'];
$smarty->assign('paneltheme', $paneltheme);

// Website language
$lang = $config['wslang'];
$smarty->assign('lang', $lang);

// CMS version
$version = $config['cmsversion'];
$smarty->assign('version', $version);

// Website timezone
$timezone = $config['wstimezone'];
$smarty->assign('timezone', $timezone);
date_default_timezone_set("$timezone");

// Lang call
$lang_req = $db->prepare("SELECT * FROM langs WHERE id = ?");
$lang_req->execute(array("$lang"));
$lg = $lang_req->fetch();

// Register call
$register = $config['register'];
$smarty->assign('register', $register);
?>
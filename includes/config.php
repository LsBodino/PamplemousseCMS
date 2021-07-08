<?php
session_start();
require_once 'libs/Autoloader.php';
Smarty_Autoloader::register();
$smarty = new SmartyBC;
$smarty->debugging = false;
$smarty->caching = false;

// Database driver (default: mysql).
$db_driver="mysql";
// Database host (default: localhost).
$db_host="localhost";
// Database name (default: pcms).
$db_name="pcms";
// Database user (default: root).
$db_user="root";
// Database password.
$db_pw="";
// Database port (default: 3306).
$db_port="3306";
try {
    $db = new PDO("$db_driver:host=$db_host;port=$db_port;dbname=$db_name;charset=utf8", $db_user, $db_pw);
}
catch(PDOException $db_error){
    print("<b>ERROR</b>: ".$db_error->getMessage());
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
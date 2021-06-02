<?php
require_once 'includes/header.php';
require_once "includes/menu.php";
$l_homepage = $lg['l_homepage'];
$smarty->assign("l_homepage", $l_homepage);

$l_login = $lg['l_login'];
$smarty->assign("l_login", $l_login);

$l_logout = $lg['l_logout'];
$smarty->assign("l_logout", $l_logout);

$l_map = $lg['l_map'];
$smarty->assign("l_map", $l_map);

$l_myspace = $lg['l_myspace'];
$smarty->assign("l_myspace", $l_myspace);

$l_pages = $lg['l_pages'];
$smarty->assign("l_pages", $l_pages);

$l_register = $lg['l_register'];
$smarty->assign("l_register", $l_register);

$l_settings = $lg['l_settings'];
$smarty->assign("l_settings", $l_settings);

$l_space = $lg['l_space'];
$smarty->assign("l_space", $l_space);

$pagesm = $db->prepare('SELECT * FROM pages WHERE visible = 1 ORDER by title DESC');
$pagesm->execute();
$smarty->assign('pagesm',$pagesm);

if(isset($_SESSION['id'])) {
$requser = $db->prepare('SELECT * FROM users WHERE id = ?');
$requser->execute(array($_SESSION['id']));
$smarty->assign('requser', $requser);
}

$smarty->display("themes/$theme/map.tpl");
require_once 'includes/footer.php';?>
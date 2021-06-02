<?php
require_once 'includes/header.php';
$l_articles = $lg['l_articles'];
$smarty->assign("l_articles", $l_articles);

$l_homepage = $lg['l_homepage'];
$smarty->assign("l_homepage", $l_homepage);

$l_login = $lg['l_login'];
$smarty->assign("l_login", $l_login);

$l_logout = $lg['l_logout'];
$smarty->assign("l_logout", $l_logout);

$l_myspace = $lg['l_myspace'];
$smarty->assign("l_myspace", $l_myspace);

$l_panel = $lg['l_panel'];
$smarty->assign("l_panel", $l_panel);

$l_register = $lg['l_register'];
$smarty->assign("l_register", $l_register);

if(isset($_SESSION['id'])) { 
    $requser = $db->prepare("SELECT * FROM users WHERE id = ?");
    $requser->execute(array($_SESSION['id']));
    $smarty->assign('requser', $requser);
}
$pages = $db->prepare('SELECT * FROM pages WHERE visible = 1 AND menu = 1 ORDER by id DESC');
$pages->execute();
$smarty->assign('pages',$pages);
$smarty->display("themes/$theme/menu.tpl");
?>

<?php 
require_once 'includes/header.php';
require_once 'includes/menu.php';
$l_edit = $lg['l_edit'];
$smarty->assign("l_edit", $l_edit);

$l_emailerror = $lg['l_emailerror'];
$smarty->assign("l_emailerror", $l_emailerror);

$l_emailused = $lg['l_emailused'];
$smarty->assign("l_emailused", $l_emailused);

$l_usernamemax = $lg['l_usernamemax'];
$smarty->assign("l_usernamemax", $l_usernamemax);

$l_usernamemin = $lg['l_usernamemin'];
$smarty->assign("l_usernamemin", $l_usernamemin);

$l_newemail = $lg['l_newemail'];
$smarty->assign("l_newemail", $l_newemail);

$l_newprofilepic = $lg['l_newprofilepic'];
$smarty->assign("l_newprofilepic", $l_newprofilepic);

$l_newpw = $lg['l_newpw'];
$smarty->assign("l_newpw", $l_newpw);

$l_newpwc = $lg['l_newpwc'];
$smarty->assign("l_newpwc", $l_newpwc);

$l_newusername = $lg['l_newusername'];
$smarty->assign("l_newusername", $l_newusername);

$l_pwerror = $lg['l_pwerror'];
$smarty->assign("l_pwerror", $l_pwerror);

$l_settings = $lg['l_settings'];
$smarty->assign("l_settings", $l_settings);

$requser = $db->prepare('SELECT * FROM users WHERE id = ?');
$requser->execute(array($_SESSION['id']));
$smarty->assign('requser', $requser);
$smarty->display("themes/$theme/settings.tpl");
require_once 'includes/footer.php'; ?>
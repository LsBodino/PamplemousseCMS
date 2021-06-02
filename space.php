<?php
require_once 'includes/header.php';
require_once 'includes/menu.php';
$l_admin = $lg['l_admin'];
$smarty->assign("l_admin", $l_admin);

$l_editor = $lg['l_editor'];
$smarty->assign("l_editor", $l_editor);

$l_lastlogin = $lg['l_lastlogin'];
$smarty->assign("l_lastlogin", $l_lastlogin);

$l_member = $lg['l_member'];
$smarty->assign("l_member", $l_member);

$l_rank = $lg['l_rank'];
$smarty->assign("l_rank", $l_rank);

$l_registrationdate = $lg['l_registrationdate'];
$smarty->assign("l_registrationdate", $l_registrationdate);

$l_settings = $lg['l_settings'];
$smarty->assign("l_settings", $l_settings);

$l_spaceof = $lg['l_spaceof'];
$smarty->assign("l_spaceof", $l_spaceof);

$l_username = $lg['l_username'];
$smarty->assign("l_username", $l_username);

if(isset($_GET['id']) AND $_GET['id'] > 0) {
   $getid = intval($_GET['id']);
   $requser = $db->prepare('SELECT * FROM users WHERE id = ?');
   $requser->execute(array($getid));
   $idexist = $requser->rowCount();
   $smarty->assign('requser', $requser);
   if($idexist == 0){
      header("Location: /error/404");
   }else{
      $smarty->display("themes/$theme/space.tpl"); 
   }
}
require_once 'includes/footer.php';?>
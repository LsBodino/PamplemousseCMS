<?php
require_once 'includes/header.php';
require_once 'includes/p-menu.php';
$l_editpage = $lg['l_editpage'];
$smarty->assign("l_editpage", $l_editpage);

$l_name = $lg['l_name'];
$smarty->assign("l_name", $l_name);

$l_no = $lg['l_no'];
$smarty->assign("l_no", $l_no);

$l_pagemenu = $lg['l_pagemenu'];
$smarty->assign("l_pagemenu", $l_pagemenu);

$l_pageupdate = $lg['l_pageupdate'];
$smarty->assign("l_pageupdate", $l_pageupdate);

$l_panel = $lg['l_panel'];
$smarty->assign("l_panel", $l_panel);

$l_publish = $lg['l_publish'];
$smarty->assign("l_publish", $l_publish);

$l_section = $lg['l_section'];
$smarty->assign("l_section", $l_section);

$l_yes = $lg['l_yes'];
$smarty->assign("l_yes", $l_yes);

if(isset($_SESSION['id'])){
   if($user['rank'] >= 1){
      if(isset($_GET['id']) AND $_GET['id'] > 0) {
         $getid = intval($_GET['id']);
         $reqpage = $db->prepare('SELECT * FROM pages WHERE id = ? AND visible = 1');
         $reqpage->execute(array($getid));
         $idexist = $reqpage->rowCount();
         $smarty->assign("reqpage", $reqpage);
         if($idexist == 0){ 
            header("Location: /404");
         } 
      }
      $smarty->display("themes/$theme/p-editpages.tpl");
   }else{
      header("Location: /error/403");
  }
}else{
  header("Location: /login");
}
require_once 'includes/footer.php';?>
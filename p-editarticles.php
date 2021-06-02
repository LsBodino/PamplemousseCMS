<?php
require_once 'includes/header.php';
require_once 'includes/p-menu.php';
$l_articlepin = $lg['l_articlepin'];
$smarty->assign("l_articlepin", $l_articlepin);

$l_articleupdate = $lg['l_articleupdate'];
$smarty->assign("l_articleupdate", $l_articleupdate);

$l_editarticle = $lg['l_editarticle'];
$smarty->assign("l_editarticle", $l_editarticle);

$l_descr = $lg['l_descr'];
$smarty->assign("l_descr", $l_descr);

$l_image = $lg['l_image'];
$smarty->assign("l_image", $l_image);

$l_name = $lg['l_name'];
$smarty->assign("l_name", $l_name);

$l_no = $lg['l_no'];
$smarty->assign("l_no", $l_no);

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
         $reqarticle = $db->prepare('SELECT * FROM articles WHERE id = ? AND visible = 1');
         $reqarticle->execute(array($getid));
         $idexist = $reqarticle->rowCount();
         $smarty->assign('reqarticle', $reqarticle);
         if($idexist == 0){ 
            header("Location: /404");
         }
      }
      $smarty->display("themes/$theme/p-editarticles.tpl");
   }else{
      header("Location: /error/403");
  }
}else{
  header("Location: /login");
}
require_once 'includes/footer.php';?>
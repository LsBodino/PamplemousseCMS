<?php
require_once 'includes/header.php';
require_once 'includes/menu.php';

$l_by = $lg['l_by'];
$smarty->assign("l_by", $l_by);

$l_published = $lg['l_published'];
$smarty->assign("l_published", $l_published);

if(isset($_GET['id']) AND $_GET['id'] > 0) {
   $getid = intval($_GET['id']);
   $reqarticle = $db->prepare('SELECT * FROM articles WHERE id = ? AND visible = 1');
   $reqarticle->execute(array($getid));
   $articlexist = $reqarticle->rowCount();
   $smarty->assign('reqarticle', $reqarticle);
   if($articlexist == 0){
      header("Location: $link/error/404");
   }else{
      $smarty->display("themes/$theme/article.tpl");  
   }
}
require_once 'includes/footer.php';
?>
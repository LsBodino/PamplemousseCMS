<?php
require_once 'includes/header.php';
require_once 'includes/menu.php';

// Database call
if(isset($_GET['id']) AND $_GET['id'] > 0) {
   $id_get = intval($_GET['id']);
   $article_req = $db->prepare('SELECT * FROM articles WHERE id = ? AND visible = 1');
   $article_req->execute(array($id_get));
   $article_exist = $article_req->rowCount();
   $smarty->assign('article_req', $article_req);

// Template call
   if($article_exist == 0){
      $smarty->display("themes/$theme/error404.tpl");
   }else{
      $smarty->display("themes/$theme/article.tpl");
   }
}else{
   $smarty->display("themes/$theme/error405.tpl");
}
require_once 'includes/footer.php';
?>
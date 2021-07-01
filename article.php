<?php
require_once 'includes/header.php';
require_once 'includes/menu.php';

// Database
if(isset($_GET['id']) AND $_GET['id'] > 0) {
   $id_get = intval($_GET['id']);
   $article_req = $db->prepare('SELECT * FROM articles WHERE id = ? AND visible = 1');
   $article_req->execute(array($id_get));
   $article_exist = $article_req->rowCount();
   $smarty->assign('article_req', $article_req);

   if($article_exist == 0){
      // Error 404
      $smarty->display("themes/$theme/error404.tpl");
   }else{
      // Template
      $smarty->display("themes/$theme/article.tpl");
   }
}else{
   // Error 405
   $smarty->display("themes/$theme/error405.tpl");
}
require_once 'includes/footer.php';
?>
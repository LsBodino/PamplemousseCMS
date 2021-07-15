<?php
require_once 'includes/header.php';
require_once 'includes/menu.php';

// Database
if(isset($_GET['id']) AND $_GET['id'] > 0) {
   $article_id_get = intval($_GET['id']);
   $article_articles_req = $db->prepare('SELECT * FROM articles WHERE id = ? AND visible = 1');
   $article_articles_req->execute(array($article_id_get));
   $article_articles_exist = $article_articles_req->rowCount();
   $smarty->assign('article_articles_req', $article_articles_req);

   if($article_articles_exist == 0){
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
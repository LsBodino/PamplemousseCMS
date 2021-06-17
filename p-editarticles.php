<?php
require_once 'includes/p-header.php';
require_once 'includes/p-menu.php';

// Database call
$category = $db->prepare("SELECT * FROM articles_categories WHERE visible = 1 ORDER by id");
$category->execute();
$smarty->assign("category", $category);

if(isset($_SESSION['id'])){
   if($user['rank'] >= 1){
      if(isset($_GET['id']) AND $_GET['id'] > 0){
         $id_get = intval($_GET['id']);
         $article_req = $db->prepare('SELECT * FROM articles WHERE id = ? AND visible = 1');
         $article_req->execute(array($id_get));
         $article_exist = $article_req->rowCount();
         $smarty->assign('article_req', $article_req);

// Template call
         if($article_exist == 0){
            $smarty->display("themes/$theme/error404.tpl");
         }else{
            $smarty->display("themes/$paneltheme/p-editarticles.tpl");
         }
      }else{
         $smarty->display("themes/$theme/error405.tpl");
      }
   }else{
      $smarty->display("themes/$theme/error403.tpl");
   }
}else{
  header("Location: $link/login");
}
require_once 'includes/p-footer.php';?>
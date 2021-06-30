<?php
require_once 'includes/header.php';
require_once 'includes/menu.php';

// Database call
if(isset($_GET['id'])){
   $id_get = $_GET['id'];
   $articles_req = $db->prepare('SELECT * FROM articles WHERE category = ? AND visible = 1');
   $articles_req->execute(array($id_get));
   $articles_nb = $articles_req->rowCount();
   $category_req = $db->prepare('SELECT * FROM articles_categories WHERE name = ? AND visible = 1');
   $category_req->execute(array($id_get));
   $category_exist = $category_req->rowCount();
   $smarty->assign('articles_req', $articles_req);
   $smarty->assign('articles_nb', $articles_nb);
   $smarty->assign('category_req', $category_req);

// Template call
   if($category_exist == 0){
      $smarty->display("themes/$theme/error404.tpl");
   }else{
      $smarty->display("themes/$theme/category.tpl");
   }
}else{
   $smarty->display("themes/$theme/error405.tpl");
}
require_once 'includes/footer.php'; ?>
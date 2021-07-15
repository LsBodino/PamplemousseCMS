<?php
require_once 'includes/header.php';
require_once 'includes/menu.php';

// Database
if(isset($_GET['id'])){
   $category_id_get = $_GET['id'];
   $category_articles_req = $db->prepare('SELECT * FROM articles WHERE category = ? AND visible = 1');
   $category_articles_req->execute(array($category_id_get));
   $category_articles_nb = $category_articles_req->rowCount();
   $category_categories_req = $db->prepare('SELECT * FROM articles_categories WHERE title = ? AND visible = 1');
   $category_categories_req->execute(array($category_id_get));
   $category_categories_exist = $category_categories_req->rowCount();
   $smarty->assign('category_articles_req', $category_articles_req);
   $smarty->assign('category_articles_nb', $category_articles_nb);
   $smarty->assign('category_categories_req', $category_categories_req);

   if($category_categories_exist == 0){
      // Error 404
      $smarty->display("themes/$theme/error404.tpl");
   }else{
      // Template
      $smarty->display("themes/$theme/category.tpl");
   }
}else{
   // Error 405
   $smarty->display("themes/$theme/error405.tpl");
}
require_once 'includes/footer.php'; ?>
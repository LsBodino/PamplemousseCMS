<?php
require_once 'includes/p-header.php';
require_once 'includes/p-menu.php';

// Database call
if(isset($_SESSION['id'])){
   if($user['rank'] >= 1){
      if(isset($_GET['id']) AND $_GET['id'] > 0){
         $id_get = intval($_GET['id']);
         $category_req = $db->prepare('SELECT * FROM articles_categories WHERE id = ? AND visible = 1');
         $category_req->execute(array($id_get));
         $category_exist = $category_req->rowCount();
         $smarty->assign('category_req', $category_req);
         if($category_exist == 0){
            header("Location: $link/error/404");
         }
      }

// Template call
      $smarty->display("themes/$paneltheme/p-editcategories.tpl");
   }else{
      header("Location: $link/error/403");
  }
}else{
  header("Location: $link/login");
}
require_once 'includes/p-footer.php';?>
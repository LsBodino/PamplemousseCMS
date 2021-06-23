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
            $smarty->display("themes/$theme/error404.tpl");
         }else{
            // Template call
            $smarty->display("themes/$paneltheme/p-editcategories.tpl");
         }
      }
      if(isset($_POST['category_name'], $_POST['category_tag'])){
         if(!empty($_POST['category_name']) AND !empty($_POST['category_tag'])){
            $category_name = htmlspecialchars($_POST['category_name']);
            $category_tag = htmlspecialchars($_POST['category_tag']);
            $category_insert = $db->prepare("UPDATE articles_categories SET name = ?, tag = ? WHERE id = ?");
            $category_insert->execute(array($category_name, $category_tag, $id_get));
            $smarty->assign("success", $l_categoryupdated);
            header("Location: $link/panel/categories/articles/$id_get");
         }
      }
   }else{
      $smarty->display("themes/$theme/error401.tpl");
   }
}else{
   header("Location: $link/login");
}
require_once 'includes/p-footer.php';?>
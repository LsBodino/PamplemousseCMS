<?php
require_once 'includes/p-header.php';
require_once 'includes/p-menu.php';

// Database
if(isset($_SESSION['id'])){
   if($rank['p_categories'] == 1){
      if(isset($_GET['id']) AND $_GET['id'] > 0){
         $id_get = intval($_GET['id']);
         $category_req = $db->prepare('SELECT * FROM articles_categories WHERE id = ? AND visible = 1');
         $category_req->execute(array($id_get));
         $category_exist = $category_req->rowCount();
         $smarty->assign('category_req', $category_req);
         if($category_exist == 0){
            // Error 404
            $smarty->display("themes/$theme/error404.tpl");
         }
      }else{
         // Error 405
         $smarty->display("themes/$theme/error405.tpl");
      }
      if(isset($_POST['category_name'], $_POST['category_tag'])){
         if(!empty($_POST['category_name']) AND !empty($_POST['category_tag'])){
            $category_name = htmlspecialchars($_POST['category_name']);
            $category_tag = htmlspecialchars($_POST['category_tag']);
            $category_req2 = $db->prepare("SELECT * FROM articles_categories WHERE tag = ?");
            $category_req2->execute(array($category_tag));
            $category_exist2 = $category_req2->rowCount();
            if($category_exist2 == 0){
               $category_insert = $db->prepare("UPDATE articles_categories SET name = ?, tag = ? WHERE id = ?");
               $category_insert->execute(array($category_name, $category_tag, $id_get));
               $smarty->assign("success", $l_categoryupdated);
            }else{
               $smarty->assign("error", $l_categorysametag);
            }
         }
      }
      // Template
      $smarty->display("themes/$paneltheme/p-editcategories.tpl");
   }else{
      // Error 401
      $smarty->display("themes/$theme/error401.tpl");
   }
}else{
   // Login
   header("Location: $link/login");
}
require_once 'includes/p-footer.php';?>
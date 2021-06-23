<?php
require_once 'includes/p-header.php';
require_once 'includes/p-menu.php';

// Database call
if(isset($_SESSION['id'])){
   if($user['rank'] >= 1){
      if(isset($_POST['category_name'], $_POST['category_tag'])){
         if(!empty($_POST['category_name']) AND !empty($_POST['category_tag'])){
            $category_name = htmlspecialchars($_POST['category_name']);
            $category_tag = htmlspecialchars($_POST['category_tag']);
            $category_req = $db->prepare("SELECT * FROM articles_categories WHERE tag = ?");
            $category_req->execute(array($category_tag));
            $category_exist = $category_req->rowCount();
            if($category_exist == 0){
               $category_insert = $db->prepare("INSERT INTO articles_categories (name, tag, visible, def) VALUES (?, ?, ?, ?)");
               $category_insert->execute(array($category_name, $category_tag, 1, 0));
               $smarty->assign('success',$l_categoryposted);
            }else{
               $smarty->assign('error',$l_categorysametag);
            }
         }
      }
      // Template call
      $smarty->display("themes/$paneltheme/p-createcategories.tpl");
   }else{
      $smarty->display("themes/$theme/error401.tpl");
   }
}else{
   header("Location: $link/login");
}
require_once 'includes/p-footer.php';?>
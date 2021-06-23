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
         if($article_exist == 0){
            $smarty->display("themes/$theme/error404.tpl");
         }else{
            // Template call
            $smarty->display("themes/$paneltheme/p-editarticles.tpl");
         }
         if(isset($_POST['article_title'], $_POST['article_section'])){
            if(!empty($_POST['article_title']) AND !empty($_POST['article_section'])){
               $article_title = htmlspecialchars($_POST['article_title']);
               $article_descr = htmlspecialchars($_POST['article_descr']);
               $article_img = $_POST['article_img'];
               $article_category = $_POST['article_category'];
               $article_section = $_POST['article_section'];
               $article_pin = $_POST['article_pin'];
               $article_insert = $db->prepare("UPDATE articles SET title = ?, descr = ?, img = ?, category = ?, section = ?, pin = ? WHERE id = ?");
               $article_insert->execute(array($article_title, $article_descr, $article_img, $article_category, $article_section, $article_pin, $id_get));
               $smarty->assign("success", $l_articleupdated);
               header("Location: $link/panel/edit/articles/$id_get");
            }
         }
      }else{
         $smarty->display("themes/$theme/error405.tpl");
      }
   }else{
      $smarty->display("themes/$theme/error401.tpl");
   }
}else{
  header("Location: $link/login");
}
require_once 'includes/p-footer.php';?>
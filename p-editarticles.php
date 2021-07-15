<?php
require_once 'includes/p-header.php';
require_once 'includes/p-menu.php';

// Database
$category = $db->prepare("SELECT * FROM articles_categories WHERE visible = 1 ORDER by id");
$category->execute();
$smarty->assign("category", $category);

if(isset($_SESSION['id'])){
   if($rank['p_articles'] == 1){
      if(isset($_GET['id']) AND $_GET['id'] > 0){
         $id_get = intval($_GET['id']);
         $article_req = $db->prepare('SELECT * FROM articles WHERE id = ? AND visible = 1');
         $article_req->execute(array($id_get));
         $article_exist = $article_req->rowCount();
         $smarty->assign('article_req', $article_req);
         // Error 404
         if($article_exist == 0){
            $smarty->display("themes/$theme/error404.tpl");
         }
      }else{
         // Error 405
         $smarty->display("themes/$theme/error405.tpl");
      }
      if(isset($_POST['article_title'], $_POST['article_section'])){
         if(!empty($_POST['article_title']) AND !empty($_POST['article_section'])){
            $article_title = htmlspecialchars($_POST['article_title']);
            $article_descr = htmlspecialchars($_POST['article_descr']);
            $article_img = $_POST['article_img'];
            $article_category = $_POST['article_category'];
            $article_section = $_POST['article_section'];
            $article_pin = $_POST['article_pin'];
            if($article_title <= 50){
               if($article_title >= 3){
                  if($article_descr <= 75){
                     $article_insert = $db->prepare("UPDATE articles SET title = ?, descr = ?, img = ?, category = ?, section = ?, pin = ? WHERE id = ?");
                     $article_insert->execute(array($article_title, $article_descr, $article_img, $article_category, $article_section, $article_pin, $id_get));
                     $smarty->assign("success", $l_articleupdated);
                  }else{
                     $smarty->assign("error", $l_descrmax);
                  }
               }else{
                  $smarty->assign("error", $l_namemin);
               }
            }else{
               $smarty->assign("error", $l_namemax2);
            }
         }
      }
      // Template
      $smarty->display("themes/$paneltheme/p-editarticles.tpl");
   }else{
      // Error 401
      $smarty->display("themes/$theme/error401.tpl");
   }
}else{
   // Login
   header("Location: $link/login");
}
require_once 'includes/p-footer.php';?>
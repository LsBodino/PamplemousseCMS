<?php
require_once 'includes/p-header.php';
require_once 'includes/p-menu.php';

// Database call
$category = $db->prepare("SELECT * FROM articles_categories WHERE visible = 1 ORDER by id");
$category->execute();
$smarty->assign("category", $category);

if(isset($_SESSION['id'])){
   if($rank['p_articles'] == 1){
      if(isset($_POST['article_title'], $_POST['article_section'])){
         if(!empty($_POST['article_title']) AND !empty($_POST['article_section'])){
            $article_title = htmlspecialchars($_POST['article_title']);
            $article_descr = htmlspecialchars($_POST['article_descr']);
            $article_img = $_POST['article_img'];
            $article_category = $_POST['article_category'];
            $article_section = $_POST['article_section'];
            $article_pin = $_POST['article_pin'];
            $article_insert = $db->prepare("INSERT INTO articles (title, descr, img, section, pin, datep, author, category, visible) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
            $article_insert->execute(array($article_title, $article_descr, $article_img, $article_section, $article_pin, time(), $_SESSION['username'], $article_category, 1));
            $smarty->assign('success',$l_articleposted);
         }
      }
      // Template call
      $smarty->display("themes/$paneltheme/p-createarticles.tpl");
   }else{
      $smarty->display("themes/$theme/error403.tpl");
   }
}else{
   header("Location: $link/login");
}

require_once 'includes/p-footer.php';?>
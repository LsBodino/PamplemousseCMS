<?php
require_once 'includes/p-header.php';
require_once 'includes/p-menu.php';

// Database call
if(isset($_SESSION['id'])){
   if($rank['p_ranks'] == 1){
      if(isset($_GET['id']) AND $_GET['id'] > 0){
         $id_get = intval($_GET['id']);
         $rank_req = $db->prepare('SELECT * FROM users_ranks WHERE id = ? AND superadmin = 0');
         $rank_req->execute(array($id_get));
         $rank_exist = $rank_req->rowCount();
         $smarty->assign('rank_req', $rank_req);
         if($rank_exist == 0){
            // Error
            $smarty->display("themes/$theme/error404.tpl");
         }
      }else{
         // Error
         $smarty->display("themes/$theme/error405.tpl");
      }
      if(isset($_POST['rank_title'])){
         if(!empty($_POST['rank_title'])){
            $rank_title = htmlspecialchars($_POST['rank_title']);
            $rank_articles = $_POST['rank_articles'];
            $rank_categories = $_POST['rank_categories'];
            $rank_configuration = $_POST['rank_configuration'];
            $rank_pages = $_POST['rank_pages'];
            $rank_panelaccess = $_POST['rank_panelaccess'];
            $rank_ranks = $_POST['rank_ranks'];
            $rank_users = $_POST['rank_users'];
            $rank_insert = $db->prepare("UPDATE users_ranks SET title = ?, p_articles = ?, p_categories = ?, p_configuration = ?, p_pages = ?, p_panelaccess = ?, p_ranks = ?, p_users = ? WHERE id = ?");
            $rank_insert->execute(array($rank_title, $rank_articles, $rank_categories, $rank_configuration, $rank_pages, $rank_panelaccess, $rank_ranks, $rank_users, $id_get));
            $smarty->assign("success", $l_rankupdated);
         }
      }
      // Template
      $smarty->display("themes/$paneltheme/p-editranks.tpl");
   }else{
      // Error
      $smarty->display("themes/$theme/error401.tpl");
   }
}else{
   // Login
  header("Location: $link/login");
}
require_once 'includes/p-footer.php';?>
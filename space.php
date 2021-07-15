<?php
require_once 'includes/header.php';
require_once 'includes/menu.php';

// Database
if(isset($_GET['username'])){
   $space_username_get = $_GET['username'];
   $space_users_req = $db->prepare('SELECT * FROM users WHERE username = ?');
   $space_users_req->execute(array($space_username_get));
   $space_articles_req = $db->prepare('SELECT * FROM articles WHERE author = ?');
   $space_articles_req->execute(array($space_username_get));
   $space_users_exist = $space_users_req->rowCount();
   $smarty->assign('space_articles_req', $space_articles_req);
   $smarty->assign('space_users_req', $space_users_req);
   
   if($space_users_exist == 0){
      // Error 404
      $smarty->display("themes/$theme/error404.tpl");
   }else{
      // Template
      $smarty->display("themes/$theme/space.tpl");
   }
}else{
   // Error 405
   $smarty->display("themes/$theme/error405.tpl");
}
require_once 'includes/footer.php';?>
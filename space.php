<?php
require_once 'includes/header.php';
require_once 'includes/menu.php';

// Database call
if(isset($_GET['id']) || isset($_GET['username'])){
   if(isset($_GET['id'])){
      $id_get = intval($_GET['id']);
      $user_req = $db->prepare('SELECT * FROM users WHERE id = ?');
      $user_req->execute(array($id_get));
      $user_exist = $user_req->rowCount();
      $smarty->assign('user_req', $user_req);
   }
   if(isset($_GET['username'])){
      $username_get = $_GET['username'];
      $user_req = $db->prepare('SELECT * FROM users WHERE username = ?');
      $user_req->execute(array($username_get));
      $user_exist = $user_req->rowCount();
      $smarty->assign('user_req', $user_req);
   }

// Template call
   if($user_exist == 0){
      $smarty->display("themes/$theme/error404.tpl");
   }else{
      $smarty->display("themes/$theme/space.tpl");
   }
}else{
   $smarty->display("themes/$theme/error405.tpl");
}
require_once 'includes/footer.php';?>
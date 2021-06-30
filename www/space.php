<?php
require_once 'includes/header.php';
require_once 'includes/menu.php';

// Database call
if(isset($_GET['id']) || isset($_GET['username'])){
   if(isset($_GET['id'])){
      $id_get = intval($_GET['id']);
      $userspace_req = $db->prepare('SELECT * FROM users WHERE id = ?');
      $userspace_req->execute(array($id_get));
   }
   if(isset($_GET['username'])){
      $username_get = $_GET['username'];
      $userspace_req = $db->prepare('SELECT * FROM users WHERE username = ?');
      $userspace_req->execute(array($username_get));
   }
   $userspace_exist = $userspace_req->rowCount();
   $smarty->assign('userspace_req', $userspace_req);
   
   // Template call
   if($userspace_exist == 0){
      $smarty->display("themes/$theme/error404.tpl");
   }else{
      $smarty->display("themes/$theme/space.tpl");
   }
}else{
   $smarty->display("themes/$theme/error405.tpl");
}
require_once 'includes/footer.php';?>
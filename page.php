<?php
require_once 'includes/header.php';
require_once 'includes/menu.php';

// Database
if(isset($_GET['id']) AND $_GET['id'] > 0){
   $id_get = intval($_GET['id']);
   $page_req = $db->prepare('SELECT * FROM pages WHERE id = ? AND visible = 1');
   $page_req->execute(array($id_get));
   $page_exist = $page_req->rowCount();
   $smarty->assign('page_req', $page_req);
   if($page_exist == 0){
      // Error
      $smarty->display("themes/$theme/error404.tpl");
   }else{

// Template
      $smarty->display("themes/$theme/page.tpl"); 
   }
   }else{
      // Error
      $smarty->display("themes/$theme/error405.tpl");
   }
require_once 'includes/footer.php'; ?>
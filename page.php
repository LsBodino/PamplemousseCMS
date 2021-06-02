<?php
require_once 'includes/header.php';
require_once 'includes/menu.php';
if(isset($_GET['id']) AND $_GET['id'] > 0) {
   $getid = intval($_GET['id']);
   $reqpage = $db->prepare('SELECT * FROM pages WHERE id = ? AND visible = 1');
   $reqpage->execute(array($getid));
   $pageexist = $reqpage->rowCount();
   $smarty->assign('reqpage', $reqpage);
   if($pageexist == 0){ 
      header("Location: /error/404");
   }else{
      $smarty->display("themes/$theme/page.tpl"); 
      }
   }
require_once 'includes/footer.php'; ?>
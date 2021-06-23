<?php
require_once 'includes/p-header.php';
require_once 'includes/p-menu.php';

// Database call
if(isset($_SESSION['id'])){
   if($user['rank'] >= 1){
      if(isset($_GET['id']) AND $_GET['id'] > 0){
         $id_get = intval($_GET['id']);
         $page_req = $db->prepare('SELECT * FROM pages WHERE id = ? AND visible = 1');
         $page_req->execute(array($id_get));
         $page_exist = $page_req->rowCount();
         $smarty->assign("page_req", $page_req);
         if($page_exist == 0){ 
            $smarty->display("themes/$theme/error404.tpl");
         }else{
            // Template call
            $smarty->display("themes/$paneltheme/p-editpages.tpl");
         }
      }
      if(isset($_POST['page_title'], $_POST['page_section'])){
         if(!empty($_POST['page_title']) AND !empty($_POST['page_section'])){
            $page_title = htmlspecialchars($_POST['page_title']);
            $page_section = $_POST['page_section'];
            $page_menu = $_POST['page_menu'];
            $page_insert = $db->prepare("UPDATE pages SET title = ?, section = ?, menu = ? WHERE id = ?");
            $page_insert->execute(array($page_title, $page_section, $page_menu, $id_get));
            $smarty->assign("success", $l_pageupdated);
            header("Location: $link/panel/edit/pages/$id_get");
         }
      }
   }else{
      $smarty->display("themes/$theme/error401.tpl");
   }
}else{
   header("Location: $link/login");
}
require_once 'includes/p-footer.php';?>
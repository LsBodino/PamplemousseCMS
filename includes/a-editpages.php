<?php 
if(isset($_SESSION['id'])) {
   if($user['rank'] >= 1){
      if(isset($_POST['page_title'], $_POST['page_section'])) {
         if(!empty($_POST['page_title']) AND !empty($_POST['page_section'])) {
            $edit_id = htmlspecialchars($_GET['id']);
            $atitle = htmlspecialchars($_POST['page_title']);
            $asection = $_POST['page_section'];
            $insertart = $db->prepare("UPDATE pages SET title = ?, section = ? WHERE id = ?");
            $insertart->execute(array($atitle, $asection, $edit_id));
            $message = "$l_pageupdate!";
         }
      }
   }else{
      header("Location: /error/403");
   }
}else{
   header("Location: /login");
}
?>
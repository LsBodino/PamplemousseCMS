<?php 
if(isset($_SESSION['id'])) {
   if($user['rank'] >= 1){
      if(isset($_POST['article_title'], $_POST['article_section'])) {
         if(!empty($_POST['article_title']) AND !empty($_POST['article_section'])) {
            $edit_id = htmlspecialchars($_GET['id']);
            $atitle = htmlspecialchars($_POST['article_title']);
            $adescr = htmlspecialchars($_POST['article_descr']);
            $aimg = $_POST['article_img'];
            $asection = $_POST['article_section'];
            $apin = $_POST['article_pin'];
            $insertart = $db->prepare("UPDATE articles SET title = ?, descr = ?, img = ?, section = ?, pin = ? WHERE id = ?");
            $insertart->execute(array($atitle, $adescr, $aimg, $asection, $apin, $edit_id));
            $msg = "$l_articleupdate!";
         }
      }
   }else{
      header("Location: /error/403");
   }
}else{
   header("Location: /login");
}
?>
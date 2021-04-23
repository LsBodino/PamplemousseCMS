<?php if(isset($_SESSION['id'])) {
         if($user['rank'] >= 1){
            if(isset($_POST['article_title'], $_POST['article_section'])) {
               if(!empty($_POST['article_title']) AND !empty($_POST['article_section'])) {
            $edit_id = htmlspecialchars($_GET['id']);
            $atitle = htmlspecialchars($_POST['article_title']);
            $adescr = htmlspecialchars($_POST['article_descr']);
            $aimg = $_POST['article_img'];
            $asection = $_POST['article_section'];
            $insertart = $db->prepare("UPDATE articles SET title = ?, descr = ?, img = ?, section = ? WHERE id = ?");
            $insertart->execute(array($atitle, $adescr, $aimg, $asection, $edit_id));
            $message = "$l_articleupdate!";
            }
         }
}else{
   header("Location: /403");
}
}else{
    header("Location: /login");
}
?>
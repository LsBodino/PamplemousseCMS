<?php
if(isset($_SESSION['id'])){
    if($user['rank'] >= 1){
    if(isset($_POST['article_title'], $_POST['article_section'])) {
    if(!empty($_POST['article_title']) AND !empty($_POST['article_section'])) {
       $article_title = htmlspecialchars($_POST['article_title']);
	   $article_descr = htmlspecialchars($_POST['article_descr']);
	   $article_img = $_POST['article_img'];
       $article_section = $_POST['article_section'];
       $ins = $db->prepare('INSERT INTO articles (title, descr, img, section, datep, id_author) VALUES (?, ?, ?, ?, NOW(), ?)');
       $ins->execute(array($article_title, $article_descr, $article_img, $article_section, $_SESSION['id']));
       $message = "$l_articleposted!";
            }
        }
    }else{
        header("Location: /403");
    }
    }else{
        header("Location: /login");
}
?>
<?php
if(isset($_SESSION['id']) && ($_SESSION['rank'] = 1)){
    if(isset($_POST['article_titre'], $_POST['article_contenu'])) {
    if(!empty($_POST['article_titre']) AND !empty($_POST['article_contenu'])) {
       $article_titre = htmlspecialchars($_POST['article_titre']);
	   $article_descr = htmlspecialchars($_POST['article_descr']);
	   $article_img = $_POST['article_img'];
       $article_contenu = htmlspecialchars($_POST['article_contenu']);
       $ins = $db->prepare('INSERT INTO articles (titre, descr, img, contenu, datep) VALUES (?, ?, ?, ?, NOW())');
       $ins->execute(array($article_titre, $article_descr, $article_img, $article_contenu));
       $message = 'Your article has been posted';
            }
        }
    }else{
        header("Location: /403");
}
?>
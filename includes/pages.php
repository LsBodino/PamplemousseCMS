<?php
if(isset($_SESSION['id']) && ($_SESSION['rank'] = 1)){
    if(isset($_POST['page_titre'], $_POST['page_contenu'])) {
    if(!empty($_POST['page_titre']) AND !empty($_POST['page_contenu'])) {
       $page_titre = htmlspecialchars($_POST['page_titre']);
       $page_contenu = htmlspecialchars($_POST['page_contenu']);
       $ins = $db->prepare('INSERT INTO pages (titre, contenu, datep) VALUES (?, ?, NOW())');
       $ins->execute(array($page_titre, $page_contenu));
       $message = "$l_pageposted.";
            }
        }
    }else{
        header("Location: /403");
}
?>
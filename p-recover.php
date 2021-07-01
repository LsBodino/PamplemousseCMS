<?php
require_once 'includes/p-header.php';

// Switch
if(isset($_SESSION['id'])){
    if(isset($_GET['id']) AND !empty($_GET['id'])){
        switch($_GET['type']){
            default:
            // Error default
                $smarty->display("themes/$theme/error405.tpl");
            break;

            // Articles
            case 'articles':
                if($rank['p_articles'] == 1){
                    $article_id = htmlspecialchars($_GET['id']);
                    $article = $db->prepare('UPDATE articles SET visible = 1 WHERE id = ?');
                    $article->execute(array($article_id));
                    header("Location: $link/panel/trash/articles");
                }else{
                    $smarty->display("themes/$theme/error401.tpl");
                }
            break;
            
            // Pages
            case 'pages':
                if($rank['p_pages'] == 1){
                    $page_id = htmlspecialchars($_GET['id']);
                    $page = $db->prepare('UPDATE pages SET visible = 1 WHERE id = ?');
                    $page->execute(array($page_id));
                    header("Location: $link/panel/trash/pages");
                }else{
                    $smarty->display("themes/$theme/error401.tpl");
                }
            break;
                
            // Users
            case 'users':
                if($rank['p_users'] == 1){
                    $user_id = htmlspecialchars($_GET['id']);
                    $user = $db->prepare('UPDATE users SET ban = 0 WHERE id = ?');
                    $user->execute(array($user_id));
                    header("Location: $link/panel/users");
                }else{
                    $smarty->display("themes/$theme/error401.tpl");
                }
            break;
        }
    }
}else{
    header("Location: $link/login");
}
?>
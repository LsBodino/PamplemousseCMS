<?php
require_once 'includes/p-header.php';

// Switch
if(isset($_SESSION['id'])){
    if(isset($_GET['id']) AND !empty($_GET['id'])){
        switch($_GET['type']){
            default:
            // Error 405
                $smarty->display("themes/$theme/error405.tpl");
            break;

            // Articles
            case 'articles':
                if($rank['p_articles'] == 1){
                    $recover_articles_get = htmlspecialchars($_GET['id']);
                    $recover_articles_req = $db->prepare('UPDATE articles SET visible = 1 WHERE id = ?');
                    $recover_articles_req->execute(array($recover_articles_get));
                    header("Location: $link/panel/trash/articles");
                }else{
                    // Error 401
                    $smarty->display("themes/$theme/error401.tpl");
                }
            break;
            
            // Pages
            case 'pages':
                if($rank['p_pages'] == 1){
                    $recover_pages_get = htmlspecialchars($_GET['id']);
                    $recover_pages_req = $db->prepare('UPDATE pages SET visible = 1 WHERE id = ?');
                    $recover_pages_req->execute(array($recover_pages_get));
                    header("Location: $link/panel/trash/pages");
                }else{
                    // Error 401
                    $smarty->display("themes/$theme/error401.tpl");
                }
            break;
                
            // Users
            case 'users':
                if($rank['p_users'] == 1){
                    $recover_users_get = htmlspecialchars($_GET['id']);
                    $recover_users_req = $db->prepare('UPDATE users SET ban = 0 WHERE id = ?');
                    $recover_pages_req->execute(array($recover_users_get));
                    header("Location: $link/panel/users");
                }else{
                    // Error 401
                    $smarty->display("themes/$theme/error401.tpl");
                }
            break;
        }
    }
}else{
    header("Location: $link/login");
}
?>
<?php
require_once 'includes/p-header.php';

// Switch
if(isset($_SESSION['id'])){
    if($user['rank'] >= 1){
        if(isset($_GET['id']) AND !empty($_GET['id'])){
            switch($_GET['type']){

                default:
                    $smarty->display("themes/$theme/error405.tpl");
                break;

                // Articles
                case 'articles':
                    $visible_id = htmlspecialchars($_GET['id']);
                    $visible = $db->prepare('UPDATE articles SET visible = 0 WHERE id = ?');
                    $visible->execute(array($visible_id));
                    header("Location: $link/panel/articles");
                break;

                // Categories
                case 'categories':
                    $visible_id = htmlspecialchars($_GET['id']);
                    $visible = $db->prepare('UPDATE articles_categories SET visible = 0 WHERE id = ?');
                    $visible->execute(array($visible_id));
                    header("Location: $link/panel/categories/articles/");
                break;
                
                // Pages
                case 'pages':
                    $visible_id = htmlspecialchars($_GET['id']);
                    $visible = $db->prepare('UPDATE pages SET visible = 0 WHERE id = ?');
                    $visible->execute(array($visible_id));
                    header("Location: $link/panel/pages");
                break;

                // Users
                case 'users':
                    if($user['rank'] == 2){
                        $ban_id = htmlspecialchars($_GET['id']);
                        $ban = $db->prepare('UPDATE users SET ban = 1 WHERE id = ?');
                        $ban->execute(array($ban_id));
                        header("Location: $link/panel/users");
                    }else{
                        $smarty->display("themes/$theme/error401.tpl");
                    }
                break;
            }
        }
    }else{
        $smarty->display("themes/$theme/error401.tpl");
    }
}else{
    header("Location: $link/login");
}
?>
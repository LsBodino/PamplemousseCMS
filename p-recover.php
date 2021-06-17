<?php
require_once 'includes/p-header.php';

// Switch
if(isset($_SESSION['id'])){
    if($user['rank'] == 2){
        if(isset($_GET['id']) AND !empty($_GET['id'])){
            switch($_GET['type']){
                default:
                    header("Location: $link/error/405");
                break;

                // Articles
                case 'articles':
                    $rec_id = htmlspecialchars($_GET['id']);
                    $rec = $db->prepare('UPDATE articles SET visible = 1 WHERE id = ?');
                    $rec->execute(array($rec_id));
                    header("Location: $link/panel/trash/articles");
                break;
                
                // Pages
                case 'pages':
                    $rec_id = htmlspecialchars($_GET['id']);
                    $rec = $db->prepare('UPDATE pages SET visible = 1 WHERE id = ?');
                    $rec->execute(array($rec_id));
                    header("Location: $link/panel/trash/pages");
                break;
                    
                // Users
                case 'users':
                    $rec_id = htmlspecialchars($_GET['id']);
                    $rec = $db->prepare('UPDATE users SET ban = 0 WHERE id = ?');
                    $rec->execute(array($rec_id));
                    header("Location: $link/panel/users");
                break;
            }
        }
    }else{
        header("Location: $link/error/403");
    }
}else{
    header("Location: $link/login");
}
?>
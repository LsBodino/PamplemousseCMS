<?php
require_once 'includes/header.php';
if(isset($_SESSION['id'])){
    if($user['rank'] >= 1){
        if(isset($_GET['id']) AND !empty($_GET['id'])){
            switch($_GET['type']){

                default:
                    header("Location: $link/error/405");
                break;

                case 'articles':
                    $del_id = htmlspecialchars($_GET['id']);
                    $del = $db->prepare('UPDATE articles SET visible = 0 WHERE id = ?');
                    $del->execute(array($del_id));
                    header("Location: $link/panel/articles");
                break;
                
                case 'pages':
                    $del_id = htmlspecialchars($_GET['id']);
                    $del = $db->prepare('UPDATE pages SET visible = 0 WHERE id = ?');
                    $del->execute(array($del_id));
                    header("Location: $link/panel/pages");
                break;

                case 'users':
                    if($user['rank'] == 2){
                        $del_id = htmlspecialchars($_GET['id']);
                        $del = $db->prepare('UPDATE users SET ban = 1 WHERE id = ?');
                        $del->execute(array($del_id));
                        header("Location: $link/panel/users");
                    }else{
                        header("Location: $link/error/403");
                    }
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
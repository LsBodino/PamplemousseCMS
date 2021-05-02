<?php include_once 'includes/header.php';
if(isset($_SESSION['id'])){
    if($user['rank'] >= 1){
        if(isset($_GET['id']) AND !empty($_GET['id'])) {
            switch($_GET['act'])
            {
            default:
            header("Location: /error/405");
            break;
            case 'article':
                $del_id = htmlspecialchars($_GET['id']);
                $del = $db->prepare('UPDATE articles SET visible = 0 WHERE id = ?');
                $del->execute(array($del_id));
                header('Location: /panel/articles');
            break;

            case 'page':
                $del_id = htmlspecialchars($_GET['id']);
                $del = $db->prepare('UPDATE pages SET visible = 0 WHERE id = ?');
                $del->execute(array($del_id));
                header('Location: /panel/pages');
            }
        }
    }else{
        header("Location: /error/403");
    }
}else{
    header("Location: /login");
} ?>
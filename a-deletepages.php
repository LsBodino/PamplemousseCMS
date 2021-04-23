<?php 	
include_once 'includes/header.php';
include_once 'includes/a-menu.php';
if(isset($_SESSION['id'])){
    if($user['rank'] >= 1){
        if(isset($_GET['id']) AND !empty($_GET['id'])) {
            $del_id = htmlspecialchars($_GET['id']);
            $del = $db->prepare('DELETE FROM pages WHERE id = ?');
            $del->execute(array($del_id));
            header('Location: /panel/pages');
} 
}else{
    header("Location: /403");
} 
}else{
    header("Location: /login");
}
include_once 'includes/footer.php';?>
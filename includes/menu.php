<?php
require_once 'includes/header.php';

// Database call
if(isset($_SESSION['id'])){ 
    $user_req = $db->prepare("SELECT * FROM users WHERE id = ?");
    $user_req->execute(array($_SESSION['id']));
    $smarty->assign('user_req', $user_req);
}
$pages = $db->prepare('SELECT * FROM pages WHERE visible = 1 AND menu = 1 ORDER by id DESC');
$pages->execute();
$smarty->assign('pages',$pages);

// Template call
$smarty->display("themes/$theme/menu.tpl");
?>

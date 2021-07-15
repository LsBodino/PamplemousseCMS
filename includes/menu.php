<?php
require_once 'includes/header.php';

// Database
if(isset($_SESSION['id'])){ 
    $menu_users_req = $db->prepare("SELECT * FROM users WHERE id = ?");
    $menu_users_req->execute(array($_SESSION['id']));
    $smarty->assign('menu_users_req', $menu_users_req);
    $menu_ranks_req = $db->prepare("SELECT * FROM users_ranks WHERE id = ?");
    $menu_ranks_req->execute(array($user['rank']));
    $smarty->assign('menu_ranks_req', $menu_ranks_req);
}
$menu_articles_req = $db->prepare('SELECT * FROM articles WHERE visible = 1 ORDER by id DESC LIMIT 4');
$menu_articles_req->execute();
$smarty->assign('menu_articles_req',$menu_articles_req);

$menu_categories_req = $db->prepare('SELECT * FROM articles_categories WHERE visible = 1 ORDER by id DESC');
$menu_categories_req->execute();
$smarty->assign('menu_categories_req',$menu_categories_req);

$menu_pages_req = $db->prepare('SELECT * FROM pages WHERE visible = 1 AND menu = 1 ORDER by id DESC');
$menu_pages_req->execute();
$smarty->assign('menu_pages_req',$menu_pages_req);

// Template
$smarty->display("themes/$theme/menu.tpl");
?>

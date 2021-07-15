<?php
require_once 'includes/header.php';
require_once 'includes/menu.php';

// Database
$map_pages_req = $db->prepare('SELECT * FROM pages WHERE visible = 1 ORDER by title DESC');
$map_pages_req->execute();
$smarty->assign('map_pages_req',$map_pages_req);

$map_categories_req = $db->prepare('SELECT * FROM articles_categories WHERE visible = 1 ORDER by title DESC');
$map_categories_req->execute();
$smarty->assign('map_categories_req',$map_categories_req);

if(isset($_SESSION['id'])) {
    $map_users_req = $db->prepare('SELECT * FROM users WHERE id = ?');
    $map_users_req->execute(array($_SESSION['id']));
    $smarty->assign('map_users_req', $map_users_req);
}

// Template
$smarty->display("themes/$theme/map.tpl");

require_once 'includes/footer.php';?>
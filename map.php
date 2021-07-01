<?php
require_once 'includes/header.php';
require_once "includes/menu.php";

// Database
$pages_map = $db->prepare('SELECT * FROM pages WHERE visible = 1 ORDER by title DESC');
$pages_map->execute();
$smarty->assign('pages_map',$pages_map);

if(isset($_SESSION['id'])) {
    $user_req = $db->prepare('SELECT * FROM users WHERE id = ?');
    $user_req->execute(array($_SESSION['id']));
    $smarty->assign('user_req', $user_req);
}

// Template
$smarty->display("themes/$theme/map.tpl");

require_once 'includes/footer.php';?>
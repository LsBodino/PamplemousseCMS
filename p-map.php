<?php
require_once 'includes/p-header.php';
require_once "includes/p-menu.php";

// Database call
if(isset($_SESSION['id'])){
    $user_req = $db->prepare('SELECT * FROM users WHERE id = ?');
    $user_req->execute(array($_SESSION['id']));
    $smarty->assign('user_req', $user_req);
}

$smarty->display("themes/$paneltheme/p-map.tpl");
require_once 'includes/p-footer.php';?>
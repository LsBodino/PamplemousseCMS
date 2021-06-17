<?php
require_once 'includes/header.php';
require_once 'includes/menu.php';

// Database call
if(!isset($_SESSION['id'])){
    $smarty->display("themes/$theme/error401.tpl");
    exit;
}else{
    $user_req = $db->prepare('SELECT * FROM users WHERE id = ?');
    $user_req->execute(array($_SESSION['id']));
    $smarty->assign('user_req', $user_req);
    
// Template call
    $smarty->display("themes/$theme/settings.tpl");
}

require_once 'includes/footer.php'; ?>
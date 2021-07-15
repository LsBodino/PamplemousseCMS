<?php
require_once 'includes/p-header.php';

// Database
if(isset($_SESSION['id'])){
    $menu_ranks_req = $db->prepare("SELECT * FROM users_ranks WHERE id = ?");
    $menu_ranks_req->execute(array($user['rank']));
    $smarty->assign('menu_ranks_req', $menu_ranks_req);

    // Template
    if($rank['p_panelaccess'] == 1){
        $smarty->display("themes/$paneltheme/p-menu.tpl");
    }
}
?> 
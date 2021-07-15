<?php
require_once 'includes/p-header.php';
require_once "includes/p-menu.php";

// Database
if(isset($_SESSION['id'])){
    $map_ranks_req = $db->prepare("SELECT * FROM users_ranks WHERE id = ?");
    $map_ranks_req->execute(array($user['rank']));
    $smarty->assign('map_ranks_req', $map_ranks_req);
    if($rank['p_panelaccess'] == 1){
        // Template
        $smarty->display("themes/$paneltheme/p-map.tpl");
    }
}
require_once 'includes/p-footer.php';?>
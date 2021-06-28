<?php
require_once 'includes/p-header.php';
require_once "includes/p-menu.php";

// Database call
if(isset($_SESSION['id'])){
    $rank_req = $db->prepare("SELECT * FROM users_ranks WHERE id = ?");
    $rank_req->execute(array($user['rank']));
    $smarty->assign('rank_req', $rank_req);
    if($rank['p_panelaccess'] == 1){
        $smarty->display("themes/$paneltheme/p-map.tpl");
    }
}
require_once 'includes/p-footer.php';?>
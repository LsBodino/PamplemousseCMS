<?php
require_once 'includes/p-header.php';

// Database call
if(isset($_SESSION['id'])){
    $rank_req = $db->prepare("SELECT * FROM users_ranks WHERE id = ?");
    $rank_req->execute(array($user['rank']));
    $smarty->assign('rank_req', $rank_req);

    // Template call
    if($rank['p_panelaccess'] == 1){
        $smarty->display("themes/$paneltheme/p-menu.tpl");
    }
}
?> 
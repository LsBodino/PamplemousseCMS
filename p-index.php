<?php
require_once 'includes/header.php';
require_once 'includes/p-menu.php';
$l_homepage = $lg['l_homepage'];
$smarty->assign("l_homepage", $l_homepage);

$l_panel = $lg['l_panel'];
$smarty->assign("l_panel", $l_panel);

$l_soon = $lg['l_soon'];
$smarty->assign("l_soon", $l_soon);

if(isset($_SESSION['id'])) {
    if($user['rank'] >= 1){
        $smarty->display("themes/$theme/p-index.tpl");
    }else{
        header("Location: /error/403");
    }
}else{
    header("Location: /login");
}

require_once 'includes/footer.php'; ?>
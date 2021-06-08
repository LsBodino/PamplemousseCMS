<?php
$l_articles = $lg['l_articles'];
$smarty->assign("l_articles", $l_articles);

$l_backwebsite = $lg['l_backwebsite'];
$smarty->assign("l_backwebsite", $l_backwebsite);

$l_config = $lg['l_config'];
$smarty->assign("l_config", $l_config);

$l_create = $lg['l_create'];
$smarty->assign("l_create", $l_create);

$l_general = $lg['l_general'];
$smarty->assign("l_general", $l_general);

$l_list = $lg['l_list'];
$smarty->assign("l_list", $l_list);

$l_pages = $lg['l_pages'];
$smarty->assign("l_pages", $l_pages);

$l_panel = $lg['l_panel'];
$smarty->assign("l_panel", $l_panel);

$l_trash = $lg['l_trash'];
$smarty->assign("l_trash", $l_trash);

$l_users = $lg['l_users'];
$smarty->assign("l_users", $l_users);

if(isset($_SESSION['id'])){
    if($user['rank'] >= 1){
        $smarty->display("themes/$theme/p-menu.tpl");
    }
} ?> 
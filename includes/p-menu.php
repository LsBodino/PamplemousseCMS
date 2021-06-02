<?php
$l_articles = $lg['l_articles'];
$smarty->assign("l_articles", $l_articles);

$l_backws = $lg['l_backws'];
$smarty->assign("l_backws", $l_backws);

$l_config = $lg['l_config'];
$smarty->assign("l_config", $l_config);

$l_create = $lg['l_create'];
$smarty->assign("l_create", $l_create);

$l_list = $lg['l_list'];
$smarty->assign("l_list", $l_list);

$l_pages = $lg['l_pages'];
$smarty->assign("l_pages", $l_pages);

$l_panel = $lg['l_panel'];
$smarty->assign("l_panel", $l_panel);

if(isset($_SESSION['id'])){
    if($user['rank'] >= 1){
        $smarty->display("themes/$theme/p-menu.tpl");
    }
} ?> 
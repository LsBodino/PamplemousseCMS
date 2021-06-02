<?php
$l_map = $lg['l_map'];
$smarty->assign("l_map", $l_map);

$l_powered = $lg['l_powered'];
$smarty->assign("l_powered", $l_powered);

$l_theme = $lg['l_theme'];
$smarty->assign("l_theme", $l_theme);

$l_version = $lg['l_version'];
$smarty->assign("l_version", $l_version);

$l_website = $lg['l_website'];
$smarty->assign("l_website", $l_website);

$smarty->display("themes/$theme/footer.tpl");
?>
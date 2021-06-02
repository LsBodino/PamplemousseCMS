<?php
require_once 'includes/header.php';
require_once 'includes/p-menu.php';
$l_config = $lg['l_config'];
$smarty->assign("l_config", $l_config);

$l_descr = $lg['l_descr'];
$smarty->assign("l_descr", $l_descr);

$l_edit = $lg['l_edit'];
$smarty->assign("l_edit", $l_edit);

$l_lang = $lg['l_lang'];
$smarty->assign("l_lang", $l_lang);

$l_link = $lg['l_link'];
$smarty->assign("l_link", $l_link);

$l_name = $lg['l_name'];
$smarty->assign("l_name", $l_name);

$l_panel = $lg['l_panel'];
$smarty->assign("l_panel", $l_panel);

$l_theme = $lg['l_theme'];
$smarty->assign("l_theme", $l_theme);

$cfglang = $db->prepare("SELECT id, name FROM lang ORDER by id");
$cfglang->execute();
$smarty->assign("cfglang", $cfglang);

if(isset($_SESSION['id'])) {
  if($user['rank'] == 2){
    $smarty->display("themes/$theme/p-config.tpl");
  }else{
    header("Location: /error/403");
  }
}else{
  header("Location: /login");
}

require_once 'includes/footer.php'; ?>
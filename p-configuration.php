<?php
require_once 'includes/header.php';
require_once 'includes/p-menu.php';
$l_config = $lg['l_config'];
$smarty->assign("l_config", $l_config);

$l_descr = $lg['l_descr'];
$smarty->assign("l_descr", $l_descr);

$l_edit = $lg['l_edit'];
$smarty->assign("l_edit", $l_edit);

$l_general = $lg['l_general'];
$smarty->assign("l_general", $l_general);

$l_lang = $lg['l_lang'];
$smarty->assign("l_lang", $l_lang);

$l_link = $lg['l_link'];
$smarty->assign("l_link", $l_link);

$l_name = $lg['l_name'];
$smarty->assign("l_name", $l_name);

$l_no = $lg['l_no'];
$smarty->assign("l_no", $l_no);

$l_panel = $lg['l_panel'];
$smarty->assign("l_panel", $l_panel);

$l_registrationwebsite = $lg['l_registrationwebsite'];
$smarty->assign("l_registrationwebsite", $l_registrationwebsite);

$l_theme = $lg['l_theme'];
$smarty->assign("l_theme", $l_theme);

$l_yes = $lg['l_yes'];
$smarty->assign("l_yes", $l_yes);

$config_lang = $db->prepare("SELECT id, name FROM lang ORDER by id");
$config_lang->execute();
$smarty->assign("config_lang", $config_lang);

if(isset($_SESSION['id'])) {
  if($user['rank'] == 2){
    $smarty->display("themes/$theme/p-configuration.tpl");
  }else{
    header("Location: /error/403");
  }
}else{
  header("Location: /login");
}

require_once 'includes/footer.php'; ?>
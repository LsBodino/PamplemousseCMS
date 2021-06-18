<?php
require_once 'includes/p-header.php';
require_once 'includes/p-menu.php';

// Database call
$config_lang = $db->prepare("SELECT id, name FROM lang ORDER by id");
$config_lang->execute();
$smarty->assign("config_lang", $config_lang);

// Template call
if(isset($_SESSION['id'])){
  if($user['rank'] == 2){
    $smarty->display("themes/$paneltheme/p-configuration.tpl");
  }else{
    $smarty->display("themes/$theme/error401.tpl");
  }
}else{
  header("Location: $link/login");
}

require_once 'includes/p-footer.php'; ?>
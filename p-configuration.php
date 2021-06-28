<?php
require_once 'includes/p-header.php';
require_once 'includes/p-menu.php';

// Database call
$config_lang = $db->prepare("SELECT id, name FROM langs ORDER by id");
$config_lang->execute();
$smarty->assign("config_lang", $config_lang);

// Template call
if(isset($_SESSION['id'])){
  if($rank['p_configuration'] == 1){
    if(isset($_POST['config_wsname'], $_POST['config_wsdescr'], $_POST['config_wslink'], $_POST['config_wslang'], $_POST['config_wstheme'], $_POST['config_wspaneltheme'], $_POST['config_register'])){
      if(!empty($_POST['config_wsname']) AND !empty($_POST['config_wsdescr']) AND !empty($_POST['config_wslink']) AND !empty($_POST['config_wslang']) AND !empty($_POST['config_wstheme']) AND !empty($_POST['config_wspaneltheme']) AND !empty($_POST['config_register'])){
        $config_wsname = htmlspecialchars($_POST['config_wsname']);
        $config_wsdescr = htmlspecialchars($_POST['config_wsdescr']);
        $config_wslink = htmlspecialchars($_POST['config_wslink']);
        $config_wslang = htmlspecialchars($_POST['config_wslang']);
        $config_wstheme = htmlspecialchars($_POST['config_wstheme']);
        $config_wspaneltheme = htmlspecialchars($_POST['config_wspaneltheme']);
        $config_register = htmlspecialchars($_POST['config_register']);
        $config_insert = $db->prepare("UPDATE config SET wsname = ?, wsdescr = ?, wslink = ?, wslang = ?, wstheme = ?, wspaneltheme = ?, register = ? WHERE id = ?");
        $config_insert->execute(array($config_wsname, $config_wsdescr, $config_wslink, $config_wslang, $config_wstheme, $config_wspaneltheme, $config_register, 1));
        header("Location: $link/panel/configuration/");
      }
    }
    $smarty->display("themes/$paneltheme/p-configuration.tpl");
  }else{
    $smarty->display("themes/$theme/error401.tpl");
  }
}else{
  header("Location: $link/login");
}
require_once 'includes/p-footer.php'; ?>
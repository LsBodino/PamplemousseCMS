<?php
require_once 'includes/p-header.php';
require_once 'includes/p-menu.php';

// Database
$config_lang = $db->prepare("SELECT id, name FROM langs ORDER by id");
$config_lang->execute();
$smarty->assign("config_lang", $config_lang);

if(isset($_SESSION['id'])){
  if($rank['p_configuration'] == 1){
    if(isset($_POST['config_wsname'], $_POST['config_wsdescr'], $_POST['config_wslink'], $_POST['config_wslang'], $_POST['config_wstheme'], $_POST['config_wspaneltheme'], $_POST['config_register'])){
      if(!empty($_POST['config_wsname']) AND !empty($_POST['config_wsdescr']) AND !empty($_POST['config_wslink']) AND !empty($_POST['config_wslang']) AND !empty($_POST['config_wstheme']) AND !empty($_POST['config_wspaneltheme']) AND !empty($_POST['config_register'])){
        $config_wsname = htmlspecialchars($_POST['config_wsname']);
        $config_wsname_long = strlen($config_wsname);
        // Name <= 25
        if($config_wsname_long <= 25){
          $config_wsdescr = htmlspecialchars($_POST['config_wsdescr']);
          $config_wsdescr_long = strlen($config_wsdescr);
          // Description <= 75
          if($config_wsdescr_long <= 75){
            $config_wslink = htmlspecialchars($_POST['config_wslink']);
            $config_wslang = htmlspecialchars($_POST['config_wslang']);
            $config_wstheme = htmlspecialchars($_POST['config_wstheme']);
            // File exists theme
            if(file_exists("./themes/$config_wstheme")){
              $config_wspaneltheme = htmlspecialchars($_POST['config_wspaneltheme']);
              // File exists panel theme
              if(file_exists("./themes/$config_wspaneltheme")){
                $config_register = htmlspecialchars($_POST['config_register']);
                $config_insert = $db->prepare("UPDATE config SET wsname = ?, wsdescr = ?, wslink = ?, wslang = ?, wstheme = ?, wspaneltheme = ?, register = ? WHERE id = ?");
                $config_insert->execute(array($config_wsname, $config_wsdescr, $config_wslink, $config_wslang, $config_wstheme, $config_wspaneltheme, $config_register, 1));
                $smarty->assign("success", $l_settingsupdated);
              }else{
                $smarty->assign("error", $l_panelthemenotfound);
              }
            }else{
              $smarty->assign("error", $l_themenotfound);
            }
          }else{
            $smarty->assign("error", $l_descrmax);
          }
        }else{
          $smarty->assign("error", $l_namemax);
        }
      }
    }
    // Template
    $smarty->display("themes/$paneltheme/p-configuration.tpl");
  }else{
    // Error
    $smarty->display("themes/$theme/error401.tpl");
  }
}else{
  // Login
  header("Location: $link/login");
}
require_once 'includes/p-footer.php'; ?>
<?php
require_once 'includes/header.php';
switch($_GET['act'])
{
default:
header("Location: /error/405");
break;

// EDIT PAGE
case 'editpages':
    if(isset($_SESSION['id'])) {
        if($user['rank'] >= 1){
            if(isset($_POST['page_title'], $_POST['page_section'], $_POST['page_id'])) {
                if(!empty($_POST['page_title']) AND !empty($_POST['page_section']) AND !empty ($_POST['page_id'])) {
                $pid = htmlspecialchars($_POST['page_id']);
                $ptitle = htmlspecialchars($_POST['page_title']);
                $psection = $_POST['page_section'];
                $pmenu = $_POST['page_menu'];
                $insertpag = $db->prepare("UPDATE pages SET title = ?, section = ?, menu = ? WHERE id = ?");
                $insertpag->execute(array($ptitle, $psection, $pmenu, $pid));
                $smarty->assign("success", $l_pageupdate);
                header("Location: /panel/edit/pages/$pid");
                }
            }
        }else{
            header("Location: /error/403");
        }
    }else{
        header("Location: /login");
    }
break;
// EDIT ARTICLES
case 'editarticles': 
    if(isset($_SESSION['id'])) {
        if($user['rank'] >= 1){
           if(isset($_POST['article_title'], $_POST['article_section'], $_POST['article_id'])) {
              if(!empty($_POST['article_title']) AND !empty($_POST['article_section']) AND !empty($_POST['article_id'])) {
                 $aid = htmlspecialchars($_POST['article_id']);
                 $atitle = htmlspecialchars($_POST['article_title']);
                 $adescr = htmlspecialchars($_POST['article_descr']);
                 $aimg = $_POST['article_img'];
                 $asection = $_POST['article_section'];
                 $apin = $_POST['article_pin'];
                 $insertart = $db->prepare("UPDATE articles SET title = ?, descr = ?, img = ?, section = ?, pin = ? WHERE id = ?");
                 $insertart->execute(array($atitle, $adescr, $aimg, $asection, $apin, $aid));
                 $smarty->assign("success", $l_articleupdate);
                 header("Location: /panel/edit/articles/$aid");
              }
           }
        }else{
           header("Location: /error/403");
        }
     }else{
        header("Location: /login");
     }
break;
// CONFIGURATION
case 'configuration':
    if(isset($_SESSION['id'])) {
        if($user['rank'] == 2){
          if(isset($_POST['wsname']) AND !empty($_POST['wsname']) AND $_POST['wsname'] != $config['wsname']) {
            $wsname = htmlspecialchars($_POST['wsname']);
            $updatename = $db->prepare("UPDATE config SET wsname = ? WHERE id = ?");
            $updatename->execute(array($wsname, 1));
            header('Location: /panel/configuration/');
          }
          if(isset($_POST['wsdescr']) AND !empty($_POST['wsdescr']) AND $_POST['wsdescr'] != $config['wsdescr']) {
            $wsdescr = htmlspecialchars($_POST['wsdescr']);
            $updatedescr = $db->prepare("UPDATE config SET wsdescr = ? WHERE id = ?");
            $updatedescr->execute(array($wsdescr, 1));
            header('Location: /panel/configuration/');
          }
          if(isset($_POST['wslink']) AND !empty($_POST['wslink']) AND $_POST['wslink'] != $config['wslink']) {
            $wslink = htmlspecialchars($_POST['wslink']);
            $updatelink = $db->prepare("UPDATE config SET wslink = ? WHERE id = ?");
            $updatelink->execute(array($wslink, 1));
            header('Location: /panel/configuration/');
          }
          if(isset($_POST['wslang']) AND !empty($_POST['wslang']) AND $_POST['wslang'] != $config['wslang']) {
            $wslang = htmlspecialchars($_POST['wslang']);
            $updatelang = $db->prepare("UPDATE config SET wslang = ? WHERE id = ?");
            $updatelang->execute(array($wslang, 1));
            header("Location: /panel/configuration");
          }
          if(isset($_POST['wstheme']) AND !empty($_POST['wstheme']) AND $_POST['wstheme'] != $config['wstheme']) {
            $wstheme = htmlspecialchars($_POST['wstheme']);
            $updatetheme = $db->prepare("UPDATE config SET wstheme = ? WHERE id = ?");
            $updatetheme->execute(array($wstheme, 1));
            header('Location: /panel/configuration/');
          }
        }else{
            header("Location: /error/403");
        }
    }else{
        header("Location: /login");
    }
break;
}
?>
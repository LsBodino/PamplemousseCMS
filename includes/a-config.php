<?php if(isset($_SESSION['id'])) {
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
?>
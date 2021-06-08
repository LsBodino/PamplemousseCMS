<?php
require_once 'includes/header.php';
switch($_GET['act'])
{
default:
header("Location: $link/error/405");
break;

// SETTINGS
case 'settings':
    if(isset($_SESSION['id'])){
        if(isset($_POST['newusername']) AND !empty($_POST['newusername']) AND $_POST['newusername'] != $user['username']){
           $newusername = htmlspecialchars($_POST['newusername']);
           $usernamel = strlen($newusername);
           if($usernamel <= 25) {
              if($usernamel >= 3){
                 $usernamel2 = $db->prepare("SELECT * FROM users WHERE username = ?");
                 $usernamel2->execute(array($newusername));
                 $usernameexist = $usernamel2->rowCount();
                 if($usernameexist == 0) {
                    $insertusername = $db->prepare("UPDATE users SET username = ? WHERE id = ?");
                    $insertusername->execute(array($newusername, $_SESSION['id']));
                    header("Location: $link/space/".$_SESSION['id']);
                 }else{
                    $smarty->assign("error", $l_usernameused);
                 }
              }else{
                 $smarty->assign("error", $l_usernamemin);
              }
           }else{
              $smarty->assign("error", $l_usernamemax);
           }
     
        }
        if(isset($_POST['newmail']) AND !empty($_POST['newmail']) AND $_POST['newmail'] != $user['mail']){
           if(filter_var($_POST['newmail'], FILTER_VALIDATE_EMAIL)){
              $newmail = htmlspecialchars($_POST['newmail']);
              $maill = $db->prepare("SELECT * FROM users WHERE mail = ?");
              $maill->execute(array($newmail));
              $mailexist = $maill->rowCount();
              if($mailexist == 0) {
                 $insertmail = $db->prepare("UPDATE users SET mail = ? WHERE id = ?");
                 $insertmail->execute(array($newmail, $_SESSION['id']));
                 header("Location: $link/space/".$_SESSION['id']);
              }else{
                 $smarty->assign("error", $l_emailused);
              }
           }else{
              $smarty->assign("error", $l_emailerror);
           }
        }
        if(isset($_POST['newpw1']) AND !empty($_POST['newpw1']) AND isset($_POST['newpw2']) AND !empty($_POST['newpw2'])){
           $pw1 = $_POST['newpw1'];
           $pw2 = $_POST['newpw2'];
           if($pw1 == $pw2){
              $insertpw = $db->prepare("UPDATE users SET pw = ? WHERE id = ?");
              $insertpw->execute(array(password_hash($pw1, PASSWORD_DEFAULT), $_SESSION['id']));
              header("Location: $link/space/".$_SESSION['id']);
           }else{
              $smarty->assign("error", $l_pwerror);
           }
        }
     }else{
        header("Location: $link/login");
     }
     if(isset($_POST['newprofilepic']) AND !empty($_POST['newprofilepic'])){
      $newprofilepic = $_POST['newprofilepic'];
      $insertpp = $db->prepare("UPDATE users SET profilepicture = ? WHERE id = ?");
      $insertpp->execute(array($newprofilepic, $_SESSION['id']));
         header("Location: $link/space/".$_SESSION['id']);
      }else{
         header("Location: $link/login");
      }

break;
}
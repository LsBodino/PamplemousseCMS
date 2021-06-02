<?php 
require_once 'includes/header.php';
require_once 'includes/menu.php';
$l_edit = $lg['l_edit'];
$smarty->assign("l_edit", $l_edit);

$l_emailerror = $lg['l_emailerror'];
$smarty->assign("l_emailerror", $l_emailerror);

$l_emailused = $lg['l_emailused'];
$smarty->assign("l_emailused", $l_emailused);

$l_maxusername = $lg['l_maxusername'];
$smarty->assign("l_maxusername", $l_maxusername);

$l_minusername = $lg['l_minusername'];
$smarty->assign("l_minusername", $l_minusername);

$l_newemail = $lg['l_newemail'];
$smarty->assign("l_newemail", $l_newemail);

$l_newpw = $lg['l_newpw'];
$smarty->assign("l_newpw", $l_newpw);

$l_newpwc = $lg['l_newpwc'];
$smarty->assign("l_newpwc", $l_newpwc);

$l_newusername = $lg['l_newusername'];
$smarty->assign("l_newusername", $l_newusername);

$l_pwerror = $lg['l_pwerror'];
$smarty->assign("l_pwerror", $l_pwerror);

$l_settings = $lg['l_settings'];
$smarty->assign("l_settings", $l_settings);

$requser = $db->prepare('SELECT * FROM users WHERE id = ?');
$requser->execute(array($_SESSION['id']));
$smarty->assign('requser', $requser);

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
               header('Location: space/'.$_SESSION['id']);
            }else{
               $smarty->assign("error", $l_usernameused);
            }
         }else{
            $smarty->assign("error", $l_minusername);
         }
      }else{
         $smarty->assign("error", $l_maxusername);
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
            header('Location: space/'.$_SESSION['id']);
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
         header('Location: space/'.$_SESSION['id']);
      }else{
         $smarty->assign("error", $l_pwerror);
      }
   }
}else{
   header("Location: /login");
}
$smarty->display("themes/$theme/settings.tpl");
require_once 'includes/footer.php'; ?>
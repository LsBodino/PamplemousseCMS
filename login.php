<?php
require_once 'includes/header.php';
require_once 'includes/menu.php';
$l_email = $lg['l_email'];
$smarty->assign("l_email", $l_email);

$l_login = $lg['l_login'];
$smarty->assign("l_login", $l_login);

$l_pw = $lg['l_pw'];
$smarty->assign("l_pw", $l_pw);

$l_register = $lg['l_register'];
$smarty->assign("l_register", $l_register);

$l_rememberme = $lg['l_rememberme'];
$smarty->assign("l_rememberme", $l_rememberme);

$l_wrongemailpw = $lg['l_wrongemailpw'];
$smarty->assign("l_wrongemailpw", $l_wrongemailpw);

$l_youarebanned = $lg['l_youarebanned'];
$smarty->assign("l_youarebanned", $l_youarebanned);

if(isset($_SESSION['id'])) {
   header("Location: $link/space/".$_SESSION['id']);
}else{
   if(isset($_POST['login'])) {
      $maillogin = htmlspecialchars($_POST['maillogin']);
      $pwlogin = $_POST['pwlogin'];
      if(!empty($maillogin) AND !empty($pwlogin)) {
         $requser = $db->prepare("SELECT * FROM users WHERE mail = ?");
         $requser->execute(array($maillogin));
         $userexist = $requser->rowCount();
         $userinfo = $requser->fetch();
         if($userexist == 1) {
            if(password_verify($pwlogin, $userinfo['pw'])){
               if(isset($_POST['rememberme'])) {
                  setcookie('mail',$maillogin,time()+365*24*3600,null,null,false,true);
                  setcookie('pw',$pwlogin,time()+365*24*3600,null,null,false,true);
               }
               if($userinfo['ban'] == 0){
                  $_SESSION['id'] = $userinfo['id'];
                  $_SESSION['username'] = $userinfo['username'];
                  $_SESSION['mail'] = $userinfo['mail'];
                  $lastlogin = $db->prepare("UPDATE users SET lastlogin = ? WHERE id = ?");
                  $lastlogin->execute(array(time(), $_SESSION['id']));
                  header("Location: $link/space/".$_SESSION['id']);
               }else{
                  $smarty->assign('error', $l_youarebanned);
               }
            }else{
               $smarty->assign('error', $l_wrongemailpw);
            }
         }else{
            $smarty->assign('error', $l_wrongemailpw);
         }
      }
   }
}
$smarty->display("themes/$theme/login.tpl");

require_once 'includes/footer.php'; ?>
<?php
require_once 'includes/header.php';
require_once 'includes/menu.php';
$l_email = $lg['l_email'];
$smarty->assign("l_email", $l_email);

$l_emailerror = $lg['l_emailerror'];
$smarty->assign("l_emailerror", $l_emailerror);

$l_emailused = $lg['l_emailused'];
$smarty->assign("l_emailused", $l_emailused);

$l_lg = $lg['l_lg'];
$smarty->assign("l_lg", $l_lg);

$l_login = $lg['l_login'];
$smarty->assign("l_login", $l_login);

$l_maxusername = $lg['l_maxusername'];
$smarty->assign("l_maxusername", $l_maxusername);

$l_minusername = $lg['l_minusername'];
$smarty->assign("l_minusername", $l_minusername);

$l_ok = $lg['l_ok'];
$smarty->assign("l_ok", $l_ok);

$l_pw = $lg['l_pw'];
$smarty->assign("l_pw", $l_pw);

$l_pw2 = $lg['l_pw2'];
$smarty->assign("l_pw2", $l_pw2);

$l_pwerror = $lg['l_pwerror'];
$smarty->assign("l_pwerror", $l_pwerror);

$l_register = $lg['l_register'];
$smarty->assign("l_register", $l_register);

$l_username = $lg['l_username'];
$smarty->assign("l_username", $l_username);

$l_usernameused = $lg['l_usernameused'];
$smarty->assign("l_usernameused", $l_usernameused);

if(isset($_SESSION['id'])) {
   header("Location: space/".$_SESSION['id']);
}else{
   if(isset($_POST['register'])) {
      $username = htmlspecialchars($_POST['username']);
      $mail = htmlspecialchars($_POST['mail']);
      $pw = $_POST['pw'];
      $pw2 = $_POST['pw2'];
      $usernamel = strlen($username);
      if($usernamel <= 25) {
         if($usernamel >= 3){
            $usernamel2 = $db->prepare("SELECT * FROM users WHERE username = ?");
            $usernamel2->execute(array($username));
            $usernameexist = $usernamel2->rowCount();
            if($usernameexist == 0) {
               if(filter_var($mail, FILTER_VALIDATE_EMAIL)) {
                  $maill = $db->prepare("SELECT * FROM users WHERE mail = ?");
                  $maill->execute(array($mail));
                  $mailexist = $maill->rowCount();
                  if($mailexist == 0) {
                     if($pw == $pw2) {
                        $insusers = $db->prepare("INSERT INTO users(username, mail, pw, rank, register, lastlogin) VALUES(?, ?, ?, ?, ?, ?)");
                        $insusers->execute(array($username, $mail, password_hash($pw, PASSWORD_DEFAULT), 0, time(), time()));
                        $success = "$l_ok. <a href=\"$link/login\">$l_login</a>";
                        $smarty->assign("success", $success);
                     }else{
                        $smarty->assign("error", $l_pwerror);
                     }
                  }else{
                     $smarty->assign("error", $l_emailused);
                  }
               }else{
                  $smarty->assign("error", $l_emailerror);
               }
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
}
$smarty->display("themes/$theme/register.tpl");

require_once 'includes/footer.php';?>
<?php
require_once 'includes/header.php';
require_once 'includes/menu.php';
$l_email = $lg['l_email'];
$smarty->assign("l_email", $l_email);

$l_emailerror = $lg['l_emailerror'];
$smarty->assign("l_emailerror", $l_emailerror);

$l_emailused = $lg['l_emailused'];
$smarty->assign("l_emailused", $l_emailused);

$l_letsgo = $lg['l_letsgo'];
$smarty->assign("l_letsgo", $l_letsgo);

$l_login = $lg['l_login'];
$smarty->assign("l_login", $l_login);

$l_ok = $lg['l_ok'];
$smarty->assign("l_ok", $l_ok);

$l_pw = $lg['l_pw'];
$smarty->assign("l_pw", $l_pw);

$l_pwc = $lg['l_pwc'];
$smarty->assign("l_pwc", $l_pwc);

$l_pwerror = $lg['l_pwerror'];
$smarty->assign("l_pwerror", $l_pwerror);

$l_register = $lg['l_register'];
$smarty->assign("l_register", $l_register);

$l_registrationsclosed = $lg['l_registrationsclosed'];
$smarty->assign("l_registrationsclosed", $l_registrationsclosed);

$l_username = $lg['l_username'];
$smarty->assign("l_username", $l_username);

$l_usernamemax = $lg['l_usernamemax'];
$smarty->assign("l_usernamemax", $l_usernamemax);

$l_usernamemin = $lg['l_usernamemin'];
$smarty->assign("l_usernamemin", $l_usernamemin);

$l_usernameused = $lg['l_usernameused'];
$smarty->assign("l_usernameused", $l_usernameused);

if(isset($_SESSION['id'])) {
   header("Location: $link/space/".$_SESSION['id']);
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
            $smarty->assign("error", $l_usernamemin);
         }
      }else{
         $smarty->assign("error", $l_usernamemax);
      }
   }
}
$smarty->display("themes/$theme/register.tpl");

require_once 'includes/footer.php';?>
<?php
require_once 'includes/header.php';

// Switch
switch($_GET['act'])
{
default:
   header("Location: $link/error/405");
break;

// Login
case 'login':
   if(isset($_POST['login'])){
      $login_mail = htmlspecialchars($_POST['login_mail']);
      $login_pw = $_POST['login_pw'];
      if(!empty($login_mail) AND !empty($login_pw)){
         $user_req = $db->prepare("SELECT * FROM users WHERE mail = ?");
         $user_req->execute(array($login_mail));
         $user_exist = $user_req->rowCount();
         $user_info = $user_req->fetch();
         if($user_exist == 1){
            if(password_verify($login_pw, $user_info['pw'])){
               if(isset($_POST['rememberme'])){
                  setcookie('mail',$login_mail,time()+365*24*3600,null,null,false,true);
                  setcookie('pw',$login_pw,time()+365*24*3600,null,null,false,true);
               }
               if($user_info['ban'] == 0){
                  $_SESSION['id'] = $user_info['id'];
                  $_SESSION['username'] = $user_info['username'];
                  $_SESSION['mail'] = $user_info['mail'];
                  $login_last = $db->prepare("UPDATE users SET lastlogin = ? WHERE id = ?");
                  $login_last->execute(array(time(), $_SESSION['id']));
                  header("Location: $link/space/".$_SESSION['username']);               
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
break;

// Settings
case 'settings':
   if(isset($_SESSION['id'])){
      if(isset($_POST['username_new']) AND !empty($_POST['username_new']) AND $_POST['username_new'] != $user['username']){
         $username_new = htmlspecialchars($_POST['username_new']);
         $username_long = strlen($username_new);
         if($username_long <= 25) {
            if($username_long >= 3){
               $username_req = $db->prepare("SELECT * FROM users WHERE username = ?");
               $username_req->execute(array($username_new));
               $username_exist = $username_req->rowCount();
               if($username_exist == 0) {
                  $username_insert = $db->prepare("UPDATE users SET username = ? WHERE id = ?");
                  $username_insert->execute(array($username_new, $_SESSION['id']));
                  header("Location: $link/space/".$_SESSION['username']);
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

      if(isset($_POST['mail_new']) AND !empty($_POST['mail_new']) AND $_POST['mail_new'] != $user['mail']){
         if(filter_var($_POST['mail_new'], FILTER_VALIDATE_EMAIL)){
            $mail_new = htmlspecialchars($_POST['mail_new']);
            $mail_req = $db->prepare("SELECT * FROM users WHERE mail = ?");
            $mail_req->execute(array($mail_new));
            $mail_exist = $mail_req->rowCount();
            if($mail_exist == 0) {
               $mail_insert = $db->prepare("UPDATE users SET mail = ? WHERE id = ?");
               $mail_insert->execute(array($mail_new, $_SESSION['id']));
               header("Location: $link/space/".$_SESSION['username']);
            }else{
               $smarty->assign("error", $l_emailused);
            }
         }else{
            $smarty->assign("error", $l_emailerror);
         }
      }

      if(isset($_POST['pw_new']) AND !empty($_POST['pw_new']) AND isset($_POST['pw_new2']) AND !empty($_POST['pw_new2'])){
         $pw_new = $_POST['pw_new'];
         $pw_new2 = $_POST['pw_new2'];
         if($pw1 == $pw2){
            $pw_insert = $db->prepare("UPDATE users SET pw = ? WHERE id = ?");
            $pw_insert->execute(array(password_hash($pw1, PASSWORD_DEFAULT), $_SESSION['id']));
            header("Location: $link/space/".$_SESSION['username']);
         }else{
            $smarty->assign("error", $l_pwerror);
         }
      }

      if(isset($_POST['profilepic_new']) AND !empty($_POST['profilepic_new'])){
         $profilepic_new = $_POST['profilepic_new'];
         $profilepic_insert = $db->prepare("UPDATE users SET profilepicture = ? WHERE id = ?");
         $profilepic_insert->execute(array($profilepic_new, $_SESSION['id']));
         header("Location: $link/space/".$_SESSION['username']);
      }
   }else{
      header("Location: $link/login");
   }

break;
}
<?php
require_once 'includes/header.php';
require_once 'includes/menu.php';

// Database
$settings_users_req = $db->prepare('SELECT * FROM users WHERE id = ?');
$settings_users_req->execute(array($_SESSION['id']));
$smarty->assign('settings_users_req', $settings_users_req); 

if(isset($_SESSION['id'])){
   // Username
   if(isset($_POST['settings_username']) AND !empty($_POST['settings_username']) AND $_POST['settings_username'] != $user['username']){
      $settings_username_post = htmlspecialchars($_POST['settings_username']);
      $settings_username_long = strlen($settings_username_post);
      // Username <= 25
      if($settings_username_long <= 25){
         // Username >= 3
         if($settings_username_long >= 3){
            $settings_users_username_req = $db->prepare("SELECT * FROM users WHERE username = ?");
            $settings_users_username_req->execute(array($settings_username_post));
            $settings_users_username_exist = $settings_users_username_req->rowCount();
            // Username exist
            if($settings_users_exist == 0){
               // Username alphanumeric
               if(ctype_alnum($settings_username_post)){
                  $settings_users_username_insert = $db->prepare("UPDATE users SET username = ? WHERE id = ?");
                  $settings_users_username_insert->execute(array($settings_username_post, $_SESSION['id']));
                  $smarty->assign("success", $l_settingsupdated);
               }else{
                  $smarty->assign("error", $l_usernameunauthorized);
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
   // Mail
   if(isset($_POST['settings_mail']) AND !empty($_POST['settings_mail']) AND $_POST['settings_mail'] != $user['mail']){
      if(filter_var($_POST['settings_mail'], FILTER_VALIDATE_EMAIL)){
         $settings_mail_post = htmlspecialchars($_POST['mail']);
         $settings_users_mail_req = $db->prepare("SELECT * FROM users WHERE mail = ?");
         $settings_users_mail_req->execute(array($settings_mail_post));
         $settings_users_mail_exist = $settings_users_mail_req->rowCount();
         // Mail exist
         if($settings_users_mail_exist == 0) {
            $settings_users_mail_insert = $db->prepare("UPDATE users SET mail = ? WHERE id = ?");
            $settings_users_mail_insert->execute(array($settings_mail_post, $_SESSION['id']));
            $smarty->assign("success", $l_settingsupdated);
         }else{
            $smarty->assign("error", $l_emailused);
         }
      }else{
         $smarty->assign("error", $l_emailerror);
      }
   }
   // Password
   if(isset($_POST['settings_pw']) AND !empty($_POST['settings_pw']) AND isset($_POST['settings_pwc']) AND !empty($_POST['settings_pwc'])){
      $settings_pw_post = $_POST['settings_pw'];
      $settings_pwc_post = $_POST['settings_pwc'];
      if($settings_pw_post == $settings_pwc_post){
         $settings_pw_long = strlen($settings_pw_post);
         // Password >= 8
         if($settings_pw_long >= 8){
            $settings_users_pw_insert = $db->prepare("UPDATE users SET pw = ? WHERE id = ?");
            $settings_users_pw_insert->execute(array(password_hash($settings_pw_post, PASSWORD_DEFAULT), $_SESSION['id']));
            $smarty->assign("success", $l_settingsupdated);
         }else{
            $smarty->assign("error", $l_pwmin);
         }
      }else{
         $smarty->assign("error", $l_pwerror);
      }
   }
   // Profilepicture
   if(isset($_POST['settings_profilepicture']) AND !empty($_POST['settings_profilepicture'])){
      $settings_profilepicture_post = $_POST['settings_profilepicture'];
      $settings_users_profilepicture_insert = $db->prepare("UPDATE users SET profilepicture = ? WHERE id = ?");
      $settings_users_profilepicture_insert->execute(array($settings_profilepicture_post, $_SESSION['id']));
      $smarty->assign("success", $l_settingsupdated);
   }
   // Template
   $smarty->display("themes/$theme/settings.tpl");
}else{
   // Login
   header("Location: $link/login");
}

require_once 'includes/footer.php'; ?>
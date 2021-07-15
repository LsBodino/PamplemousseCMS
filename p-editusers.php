<?php
require_once 'includes/p-header.php';
require_once 'includes/p-menu.php';

// Database
$editusers_ranks_req = $db->prepare("SELECT * FROM users_ranks WHERE superadmin = 0 ORDER by id");
$editusers_ranks_req->execute();
$smarty->assign("editusers_ranks_req", $editusers_ranks_req);

if(isset($_SESSION['id'])){
   if($rank['p_users'] == 1){
      if(isset($_GET['id']) AND $_GET['id'] > 0){
         $id_get = intval($_GET['id']);
         $user_req = $db->prepare('SELECT * FROM users WHERE id = ?');
         $user_req->execute(array($id_get));
         $user_exist = $user_req->rowCount();
         $smarty->assign('user_req', $user_req);
         // User exist
         if($user_exist == 0){
            // Error 404
            $smarty->display("themes/$theme/error404.tpl");
            exit;
         }
      }else{
         // Error 405
         $smarty->display("themes/$theme/error405.tpl");
      }
      // Username
      if(isset($_POST['user_username']) AND !empty($_POST['user_username'])){
         $user_username = htmlspecialchars($_POST['user_username']);
         $user_username_long = strlen($user_username);
         // Username <= 25
         if($user_username_long <= 25){
            // Username >= 3
            if($user_username_long >= 3){
               $user_username_req = $db->prepare("SELECT * FROM users WHERE username = ?");
               $user_username_req->execute(array($user_username));
               $user_username_exist = $user_username_req->rowCount();
               // Username exist
               if($user_username_exist == 0){
                  // Username alphanumeric
                  if(ctype_alnum($user_username)){
                     $user_username_insert = $db->prepare("UPDATE users SET username = ? WHERE id = ?");
                     $user_username_insert->execute(array($user_username, $id_get));
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
      if(isset($_POST['user_mail']) AND !empty($_POST['user_mail'])){
         if(filter_var($_POST['user_mail'], FILTER_VALIDATE_EMAIL)){
            $user_mail = htmlspecialchars($_POST['user_mail']);
            $user_mail_req = $db->prepare("SELECT * FROM users WHERE mail = ?");
            $user_mail_req->execute(array($user_mail));
            $user_mail_exist = $user_mail_req->rowCount();
            // Mail exist
            if($user_mail_exist == 0) {
               $user_mail_insert = $db->prepare("UPDATE users SET mail = ? WHERE id = ?");
               $user_mail_insert->execute(array($user_mail, $id_get));
               $smarty->assign("success", $l_settingsupdated);
            }else{
               $smarty->assign("error", $l_emailused);
            }
         }else{
            $smarty->assign("error", $l_emailerror);
         }
      }
      // Password
      if(isset($_POST['user_pw']) AND !empty($_POST['user_pw'])){
         $user_pw = $_POST['user_pw'];
         $user_pw_long = strlen($user_pw);
         // Password >= 8
         if($user_pw_long >= 8){
            $user_pw_insert = $db->prepare("UPDATE users SET pw = ? WHERE id = ?");
            $user_pw_insert->execute(array(password_hash($user_pw, PASSWORD_DEFAULT), $id_get));
            $smarty->assign("success", $l_settingsupdated);
         }else{
            $smarty->assign("error", $l_pwmin);
         }
      }
      // Template
      $smarty->display("themes/$paneltheme/p-editusers.tpl");
   }else{
      // Error 401
      $smarty->display("themes/$theme/error401.tpl");
   }
}else{
   // Login
   header("Location: $link/login");
}
require_once 'includes/p-footer.php';?>
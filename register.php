<?php
require_once 'includes/header.php';
require_once 'includes/menu.php';

// Session
if(isset($_SESSION['id'])){
   header("Location: $link/space/".$_SESSION['username']);
}else{
   // Database
   if(isset($_POST['register'])){
      $register_username_post = htmlspecialchars($_POST['register_username']);
      $register_mail_post = htmlspecialchars($_POST['register_mail']);
      $register_pw_post = $_POST['register_pw'];
      $register_pwc_post = $_POST['register_pwc'];
      $register_username_long = strlen($register_username_post);
      // Username <= 25
      if($register_username_long <= 25){
         // Username >= 3
         if($register_username_long >= 3){
            $register_users_username_req = $db->prepare("SELECT * FROM users WHERE username = ?");
            $register_users_username_req->execute(array($register_username_post));
            $register_users_username_exist = $register_users_username_req->rowCount();
            // Username exist
            if($register_users_username_exist == 0){
               // Username alphanumeric
               if(ctype_alnum($register_username_post)){
                  // Email valid
                  if(filter_var($register_mail_post, FILTER_VALIDATE_EMAIL)){
                     $register_users_mail_req = $db->prepare("SELECT * FROM users WHERE mail = ?");
                     $register_users_mail_req->execute(array($register_mail_post));
                     $register_users_mail_exist = $register_users_mail_req->rowCount();
                     // Email exist
                     if($register_users_mail_exist == 0){
                        // Password == Password 2
                        if($register_pw_post == $register_pwc_post){
                           $register_pw_long = strlen($register_pw_post);
                           // Password >= 8
                           if($register_pw_long >= 8){
                              $register_users_insert = $db->prepare("INSERT INTO users(username, mail, pw, rank, register, lastlogin, profilepicture, ban, signature) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?)");
                              $register_users_insert->execute(array($register_username_post, $register_mail_post, password_hash($register_pw_post, PASSWORD_DEFAULT), 1, time(), time(), "/img/profile.png", 0, ""));
                              $smarty->assign("success", $l_accountcreated);
                           }else{
                              $smarty->assign("error", $l_pwmin);
                           }
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
   // Template
   $smarty->display("themes/$theme/register.tpl");
}

require_once 'includes/footer.php';?>
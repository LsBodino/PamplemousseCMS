<?php
require_once 'includes/header.php';
require_once 'includes/menu.php';

// Session
if(isset($_SESSION['id'])){
   header("Location: $link/space/".$_SESSION['username']);
}else{
   // Database
   if(isset($_POST['register'])){
      $username = htmlspecialchars($_POST['username']);
      $mail = htmlspecialchars($_POST['mail']);
      $pw = $_POST['pw'];
      $pw2 = $_POST['pw2'];
      $username_long = strlen($username);
      // Username <= 25
      if($username_long <= 25){
         // Username >= 3
         if($username_long >= 3){
            $username_req = $db->prepare("SELECT * FROM users WHERE username = ?");
            $username_req->execute(array($username));
            $username_exist = $username_req->rowCount();
            // Username exist
            if($username_exist == 0){
               // Username alphanumeric
               if(ctype_alnum($username)){
                  // Email valid
                  if(filter_var($mail, FILTER_VALIDATE_EMAIL)){
                     $mail_req = $db->prepare("SELECT * FROM users WHERE mail = ?");
                     $mail_req->execute(array($mail));
                     $mail_exist = $mail_req->rowCount();
                     // Email exist
                     if($mail_exist == 0){
                        // Password == Password 2
                        if($pw == $pw2){
                           $pw_long = strlen($pw);
                           // Password >= 8
                           if($pw_long >= 8){
                              $user_insert = $db->prepare("INSERT INTO users(username, mail, pw, rank, register, lastlogin, profilepicture, ban) VALUES(?, ?, ?, ?, ?, ?, ?, ?)");
                              $user_insert->execute(array($username, $mail, password_hash($pw, PASSWORD_DEFAULT), 1, time(), time(), "/img/profile.png", 0));
                              $smarty->assign("success", $l_ok);
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
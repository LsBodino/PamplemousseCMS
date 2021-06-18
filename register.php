<?php
require_once 'includes/header.php';
require_once 'includes/menu.php';

// Database call
if(isset($_SESSION['id'])){
   header("Location: $link/space/".$_SESSION['username']);
}else{
   if(isset($_POST['register'])){
      $username = htmlspecialchars($_POST['username']);
      $mail = htmlspecialchars($_POST['mail']);
      $pw = $_POST['pw'];
      $pw2 = $_POST['pw2'];
      $username_long = strlen($username);
      if($username_long <= 25){
         if($username_long >= 3){
            $username_req = $db->prepare("SELECT * FROM users WHERE username = ?");
            $username_req->execute(array($username));
            $username_exist = $username_req->rowCount();
            if($username_exist == 0){
               if(ctype_alnum($username)){
                  if(filter_var($mail, FILTER_VALIDATE_EMAIL)){
                     $mail_req = $db->prepare("SELECT * FROM users WHERE mail = ?");
                     $mail_req->execute(array($mail));
                     $mail_exist = $mail_req->rowCount();
                     if($mail_exist == 0){
                        if($pw == $pw2){
                           $pw_long = strlen($pw);
                           if($pw_long >= 8){
                              $user_insert = $db->prepare("INSERT INTO users(username, mail, pw, rank, register, lastlogin, profilepicture, ban) VALUES(?, ?, ?, ?, ?, ?, ?, ?)");
                              $user_insert->execute(array($username, $mail, password_hash($pw, PASSWORD_DEFAULT), 0, time(), time(), "/img/picture.png", 0));
                              $success = "$l_ok. <a href=\"$link/login\">$l_login</a>";
                              $smarty->assign("success", $success);
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
}

// Template call
$smarty->display("themes/$theme/register.tpl");

require_once 'includes/footer.php';?>
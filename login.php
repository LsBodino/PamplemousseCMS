<?php
require_once 'includes/header.php';
require_once 'includes/menu.php';

// Database
if(isset($_POST['login'])){
   $login_mail_post = htmlspecialchars($_POST['login_mail']);
   $login_pw_post = $_POST['login_pw'];
   if(!empty($login_mail_post) AND !empty($login_pw_post)){
      $login_users_req = $db->prepare("SELECT * FROM users WHERE mail = ?");
      $login_users_req->execute(array($login_mail_post));
      $login_users_exist = $login_users_req->rowCount();
      $login_users_fetch = $login_users_req->fetch();
      if($login_users_exist == 1){
         if(password_verify($login_pw_post, $login_users_fetch['pw'])){
            if(isset($_POST['rememberme'])){
               setcookie('mail',$login_mail_post,time()+365*24*3600,null,null,false,true);
               setcookie('pw',$login_users_fetch['pw'],time()+365*24*3600,null,null,false,true);
            }
            if($login_users_fetch['ban'] == 0){
               $_SESSION['id'] = $login_users_fetch['id'];
               $_SESSION['username'] = $login_users_fetch['username'];
               $_SESSION['mail'] = $login_users_fetch['mail'];            
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

// Session
if(isset($_SESSION['id'])){
   header("Location: $link/index");
}else{
   
// Template
   $smarty->display("themes/$theme/login.tpl");
}
require_once 'includes/footer.php'; ?>
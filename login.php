<?php
require_once 'includes/header.php';
require_once 'includes/menu.php';

// Errors call
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

// Session call
if(isset($_SESSION['id'])){
   header("Location: $link/index");
}else{
   
// Template call
   $smarty->display("themes/$theme/login.tpl");
}
require_once 'includes/footer.php'; ?>
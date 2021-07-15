<?php
if(!isset($_SESSION['id']) AND isset($_COOKIE['mail'],$_COOKIE['pw']) AND !empty($_COOKIE['mail']) AND !empty($_COOKIE['pw'])){
   $user_req = $db->prepare("SELECT * FROM users WHERE mail = ? AND pw = ?");
   $user_req->execute(array($_COOKIE['mail'], $_COOKIE['pw']));
   $user_exist = $user_req->rowCount();
   if($user_exist == 1)
   {
      $user_info = $user_req->fetch();
      $_SESSION['id'] = $user_info['id'];
      $_SESSION['username'] = $user_info['username'];
      $_SESSION['mail'] = $user_info['mail'];
   }
}
?>
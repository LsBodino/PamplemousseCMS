<?php
if(!isset($_SESSION['id']) AND isset($_COOKIE['mail'],$_COOKIE['pw']) AND !empty($_COOKIE['mail']) AND !empty($_COOKIE['pw'])){
   $requser = $db->prepare("SELECT * FROM users WHERE mail = ? AND pw = ?");
   $requser->execute(array($_COOKIE['mail'], $_COOKIE['pw']));
   $userexist = $requser->rowCount();
   if($userexist == 1)
   {
      $userinfo = $requser->fetch();
      $_SESSION['id'] = $userinfo['id'];
      $_SESSION['username'] = $userinfo['username'];
      $_SESSION['mail'] = $userinfo['mail'];
   }
}
?>
<?php
if(isset($_SESSION['id'])) {
    header("Location: space/".$_SESSION['id']);
}else{
if(isset($_POST['login'])) {
    $maillogin = htmlspecialchars($_POST['maillogin']);
    $pwlogin = sha1($_POST['pwlogin']);
    if(!empty($maillogin) AND !empty($pwlogin)) {
       $requser = $db->prepare("SELECT * FROM users WHERE mail = ? AND pw = ?");
       $requser->execute(array($maillogin, $pwlogin));
       $userexist = $requser->rowCount();
       if($userexist == 1) {
         if(isset($_POST['rememberme'])) {
            setcookie('mail',$maillogin,time()+365*24*3600,null,null,false,true);
            setcookie('pw',$pwlogin,time()+365*24*3600,null,null,false,true);
         }
          $userinfo = $requser->fetch();
          $_SESSION['id'] = $userinfo['id'];
          $_SESSION['username'] = $userinfo['username'];
          $_SESSION['mail'] = $userinfo['mail'];
          header("Location: space/".$_SESSION['id']);
       } else {
          $error = "$l_wrongemailpw!";
       }
    } else {
       $error = "";
    }
 }
}
 ?>
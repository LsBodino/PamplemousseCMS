<?php
if(isset($_SESSION['id'])) {
   header("Location: space/".$_SESSION['id']);
}else{
if(isset($_POST['register'])) {
   $username = htmlspecialchars($_POST['username']);
   $mail = htmlspecialchars($_POST['mail']);
   $pw = sha1($_POST['pw']);
   $pw2 = sha1($_POST['pw2']);
   $usernamel = strlen($username);
      if($usernamel <= 25) {
         $usernamel2 = $db->prepare("SELECT * FROM users WHERE username = ?");
         $usernamel2->execute(array($username));
         $usernameexist = $usernamel2->rowCount();
         if($usernameexist == 0) {
            if(filter_var($mail, FILTER_VALIDATE_EMAIL)) {
               $maill = $db->prepare("SELECT * FROM users WHERE mail = ?");
               $maill->execute(array($mail));
               $mailexist = $maill->rowCount();
               if($mailexist == 0) {
                  if($pw == $pw2) {
                     $insusers = $db->prepare("INSERT INTO users(username, mail, pw, rank) VALUES(?, ?, ?, ?)");
                     $insusers->execute(array($username, $mail, $pw, 0));
                     $victory = "$l_ok. <a href=\"/login\">$l_login</a>";
                  }else{
                     $error = "$l_pwerror!";
                  }
               }else{
                  $error = "$l_emailused!";
               }
            }else{
               $error = "$l_emailerror!";
            }
         }else{
            $error = "$l_usernameused!";
         }
      }else{
         $error = "$l_maxusername!";
      }
}
}?>
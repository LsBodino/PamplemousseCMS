<?php
if(isset($_SESSION['id'])) {
    header("Location: space/".$_SESSION['id']);
}else{
if(isset($_POST['connexion'])) {
    $mailconnexion = htmlspecialchars($_POST['mailconnexion']);
    $mdpconnexion = sha1($_POST['mdpconnexion']);
    if(!empty($mailconnexion) AND !empty($mdpconnexion)) {
       $requser = $db->prepare("SELECT * FROM membres WHERE mail = ? AND mdp = ?");
       $requser->execute(array($mailconnexion, $mdpconnexion));
       $userexist = $requser->rowCount();
       if($userexist == 1) {
         if(isset($_POST['rememberme'])) {
            setcookie('email',$mailconnexion,time()+365*24*3600,null,null,false,true);
            setcookie('password',$mdpconnexion,time()+365*24*3600,null,null,false,true);
         }
          $userinfo = $requser->fetch();
          $_SESSION['id'] = $userinfo['id'];
          $_SESSION['pseudo'] = $userinfo['pseudo'];
          $_SESSION['mail'] = $userinfo['mail'];
          header("Location: space/".$_SESSION['id']);
       } else {
          $erreur = "Wrong e-mail address or password!";
       }
    } else {
       $erreur = "";
    }
 }
}
 ?>
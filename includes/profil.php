<?php if(isset($_SESSION['id'])) {
    $requser = $db->prepare("SELECT * FROM membres WHERE id = ?");
    $requser->execute(array($_SESSION['id']));
    $user = $requser->fetch();
    if(isset($_POST['newmail']) AND !empty($_POST['newmail']) AND $_POST['newmail'] != $user['mail']) {
      if(filter_var($_POST['newmail'], FILTER_VALIDATE_EMAIL)) {
       $newmail = htmlspecialchars($_POST['newmail']);
       $insertmail = $db->prepare("UPDATE membres SET mail = ? WHERE id = ?");
       $insertmail->execute(array($newmail, $_SESSION['id']));
       header('Location: space/'.$_SESSION['id']);
    }else{
       $msg = "Your email address is not valid.";
    }
   }
    if(isset($_POST['newmdp1']) AND !empty($_POST['newmdp1']) AND isset($_POST['newmdp2']) AND !empty($_POST['newmdp2'])) {
       $mdp1 = sha1($_POST['newmdp1']);
       $mdp2 = sha1($_POST['newmdp2']);
       if($mdp1 == $mdp2) {
          $insertmdp = $db->prepare("UPDATE membres SET mdp = ? WHERE id = ?");
          $insertmdp->execute(array($mdp1, $_SESSION['id']));
          header('Location: space/'.$_SESSION['id']);
       } else {
          $msg = "Your passwords don’t match.";
       }
    }
} else {
    header("Location: /login");
 }
 ?>
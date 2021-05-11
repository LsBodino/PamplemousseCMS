<?php if(isset($_SESSION['id'])){
         if(isset($_POST['newmail']) AND !empty($_POST['newmail']) AND $_POST['newmail'] != $user['mail']){
            if(filter_var($_POST['newmail'], FILTER_VALIDATE_EMAIL)){
               $newmail = htmlspecialchars($_POST['newmail']);
               $insertmail = $db->prepare("UPDATE users SET mail = ? WHERE id = ?");
               $insertmail->execute(array($newmail, $_SESSION['id']));
               header('Location: space/'.$_SESSION['id']);
            }else{
               $msg = "$l_emailerror.";
            }
         }
         if(isset($_POST['newpw1']) AND !empty($_POST['newpw1']) AND isset($_POST['newpw2']) AND !empty($_POST['newpw2'])){
            $pw1 = sha1($_POST['newpw1']);
            $pw2 = sha1($_POST['newpw2']);
            if($pw1 == $pw2){
               $insertpw = $db->prepare("UPDATE users SET pw = ? WHERE id = ?");
               $insertpw->execute(array($pw1, $_SESSION['id']));
               header('Location: space/'.$_SESSION['id']);
            }else{
               $msg = "$l_pwerror.";
            }
         }
      }else{
         header("Location: /login");
      }
?>
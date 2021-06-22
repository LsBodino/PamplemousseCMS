<?php
require_once 'includes/header.php';
require_once 'includes/menu.php';

// Database call
if(isset($_SESSION['id'])){
    if(isset($_POST['username_new']) AND !empty($_POST['username_new']) AND $_POST['username_new'] != $user['username']){
       $username_new = htmlspecialchars($_POST['username_new']);
       $username_long = strlen($username_new);
       if($username_long <= 25) {
          if($username_long >= 3){
             $username_req = $db->prepare("SELECT * FROM users WHERE username = ?");
             $username_req->execute(array($username_new));
             $username_exist = $username_req->rowCount();
             if($username_exist == 0) {
                $username_insert = $db->prepare("UPDATE users SET username = ? WHERE id = ?");
                $username_insert->execute(array($username_new, $_SESSION['id']));
                header("Location: $link/space?id=".$_SESSION['id']);
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

    if(isset($_POST['mail_new']) AND !empty($_POST['mail_new']) AND $_POST['mail_new'] != $user['mail']){
       if(filter_var($_POST['mail_new'], FILTER_VALIDATE_EMAIL)){
          $mail_new = htmlspecialchars($_POST['mail_new']);
          $mail_req = $db->prepare("SELECT * FROM users WHERE mail = ?");
          $mail_req->execute(array($mail_new));
          $mail_exist = $mail_req->rowCount();
          if($mail_exist == 0) {
             $mail_insert = $db->prepare("UPDATE users SET mail = ? WHERE id = ?");
             $mail_insert->execute(array($mail_new, $_SESSION['id']));
             header("Location: $link/space?id=".$_SESSION['id']);
          }else{
             $smarty->assign("error", $l_emailused);
          }
       }else{
          $smarty->assign("error", $l_emailerror);
       }
    }

    if(isset($_POST['pw_new']) AND !empty($_POST['pw_new']) AND isset($_POST['pw_new2']) AND !empty($_POST['pw_new2'])){
       $pw_new = $_POST['pw_new'];
       $pw_new2 = $_POST['pw_new2'];
       if($pw1 == $pw2){
          $pw_insert = $db->prepare("UPDATE users SET pw = ? WHERE id = ?");
          $pw_insert->execute(array(password_hash($pw1, PASSWORD_DEFAULT), $_SESSION['id']));
          header("Location: $link/space?id=".$_SESSION['id']);
       }else{
          $smarty->assign("error", $l_pwerror);
       }
    }

    if(isset($_POST['profilepic_new']) AND !empty($_POST['profilepic_new'])){
       $profilepic_new = $_POST['profilepic_new'];
       $profilepic_insert = $db->prepare("UPDATE users SET profilepicture = ? WHERE id = ?");
       $profilepic_insert->execute(array($profilepic_new, $_SESSION['id']));
       header("Location: $link/space?id=".$_SESSION['id']);
    }
 }else{
    header("Location: $link/login");
}
if(!isset($_SESSION['id'])){
    $smarty->display("themes/$theme/error401.tpl");
    exit;
}else{
    $user_req = $db->prepare('SELECT * FROM users WHERE id = ?');
    $user_req->execute(array($_SESSION['id']));
    $smarty->assign('user_req', $user_req);
    
// Template call
    $smarty->display("themes/$theme/settings.tpl");
}

require_once 'includes/footer.php'; ?>
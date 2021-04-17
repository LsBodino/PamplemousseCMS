<?php
if(isset($_SESSION['id'])) {
   header("Location: space/".$_SESSION['id']);
}else{
if(isset($_POST['inscription'])) {
   $pseudo = htmlspecialchars($_POST['pseudo']);
   $mail = htmlspecialchars($_POST['mail']);
   $mdp = sha1($_POST['mdp']);
   $mdp2 = sha1($_POST['mdp2']);
   $pseudol = strlen($pseudo);
      if($pseudol <= 25) {
         $pseudol2 = $db->prepare("SELECT * FROM membres WHERE pseudo = ?");
         $pseudol2->execute(array($pseudo));
         $pseudoexist = $pseudol2->rowCount();
         if($pseudoexist == 0) {
            if(filter_var($mail, FILTER_VALIDATE_EMAIL)) {
               $maill = $db->prepare("SELECT * FROM membres WHERE mail = ?");
               $maill->execute(array($mail));
               $mailexist = $maill->rowCount();
               if($mailexist == 0) {
                  if($mdp == $mdp2) {
                     $insmembres = $db->prepare("INSERT INTO membres(pseudo, mail, mdp, rank) VALUES(?, ?, ?, ?)");
                     $insmembres->execute(array($pseudo, $mail, $mdp, 0));
                     $reussi = "$l_ok. <a href=\"/login\">$l_login</a>";
                  }else{
                     $erreur = "$l_pwerror!";
                  }
               }else{
                  $erreur = "$l_emailused!";
               }
            }else{
               $erreur = "$l_emailerror!";
            }
         }else{
            $erreur = "$l_pseudoused!";
         }
      }else{
         $erreur = "$l_maxpseudo!";
      }
}
}?>
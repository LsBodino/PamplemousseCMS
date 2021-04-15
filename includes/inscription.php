<?php
if(isset($_SESSION['id'])) {
   header("Location: profil/".$_SESSION['id']);
}else{
if(isset($_POST['inscription'])) {
   $pseudo = htmlspecialchars($_POST['pseudo']); // Recupère le pseudo.
   $mail = htmlspecialchars($_POST['mail']);
   $mdp = sha1($_POST['mdp']);
   $mdp2 = sha1($_POST['mdp2']);
   $pseudol = strlen($pseudo); // Recupère le nombre d'octets du pseudo.
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
                     $reussi = "Votre compte a bien été créé ! <a href=\"/login\">Me connecter</a>";
                  }else{
                     $erreur = "Vos mots de passes ne correspondent pas !";
                  }
               }else{
                  $erreur = "Adresse mail déjà utilisée !";
               }
            }else{
               $erreur = "Votre adresse mail n'est pas valide !";
            }
         }else{
            $erreur = "Votre pseudo est déjà utilisé !";
         }
      }else{
         $erreur = "Votre pseudo ne doit pas dépasser 25 caractères !";
      }
}
}?>
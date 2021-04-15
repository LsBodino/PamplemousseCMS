<?php include_once 'includes/header.php';
include_once 'includes/inscription.php';
?>
<html>
   <head>
      <title><?= $title ?>: Inscription</title>
      <meta charset="utf-8">
   </head>
   <body>
      <center>
      <div class="container">
      <div class="row">
         <h2>Inscription</h2>
         <?php
         if(isset($erreur)) {
            echo '<div class="alert alert-danger"><strong>'.$erreur.'</strong><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div>';
         }
         if(isset($reussi)) {
            echo '<div class="alert alert-success alert-dismissable"><strong>'.$reussi.'</strong><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div>';
         }
         ?>
         <div class="form-group">
         <form method="POST" action="">
                     <label for="pseudo">Pseudo :</label>
                     <input type="text" placeholder="LsBodino" class="form-control" id="pseudo" name="pseudo" required value="<?php if(isset($pseudo)) { echo $pseudo; } ?>" />
                     <br>
                     <label for="mail">Adresse Mail :</label>
                     <input type="email" class="form-control" placeholder="moncompte@worlder.net" id="mail" name="mail" required value="<?php if(isset($mail)) { echo $mail; } ?>" />
                     <br>
                     <label for="mdp">Mot de passe :</label>
                     <input type="password" class="form-control" placeholder="Worlder09*" id="mdp" required name="mdp" />
                     <br>
                     <label for="mdp2">Confirmation du mot de passe :</label>
                     <input type="password" class="form-control" placeholder="Worlder09*" id="mdp2" required name="mdp2" />
                     <br>
                     <input type="submit" class="bouton" name="inscription" value="C'est parti!" />
         </form>
      </div></div></div>
      </center>
   </body>
</html>
<?php include_once 'includes/footer.php';?>
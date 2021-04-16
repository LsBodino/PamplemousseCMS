<?php include_once 'includes/header.php';
include_once 'includes/inscription.php';
?>
<html>
   <head>
      <title><?= $title ?>: Register</title>
      <meta charset="utf-8">
   </head>
   <body>
      <center>
      <div class="container">
      <div class="row">
         <h2>Register</h2>
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
                     <input type="text" class="form-control" id="pseudo" name="pseudo" required value="<?php if(isset($pseudo)) { echo $pseudo; } ?>" />
                     <br>
                     <label for="mail">Email address :</label>
                     <input type="email" class="form-control" id="mail" name="mail" required value="<?php if(isset($mail)) { echo $mail; } ?>" />
                     <br>
                     <label for="mdp">Password :</label>
                     <input type="password" class="form-control" id="mdp" required name="mdp" />
                     <br>
                     <label for="mdp2">Password confirm :</label>
                     <input type="password" class="form-control" id="mdp2" required name="mdp2" />
                     <br>
                     <input type="submit" class="bouton" name="inscription" value="Let's go!" />
         </form>
      </div></div></div>
      </center>
   </body>
</html>
<?php include_once 'includes/footer.php';?>
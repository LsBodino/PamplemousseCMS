<?php
include_once 'includes/header.php';
include_once 'includes/login.php';
?>
 <html>
    <head>
       <title><?= $title ?>: Connexion</title>
       <meta charset="utf-8">
    </head>
    <body>
    <div class="container">
      <div class="row">
      <center>
          <h2>Connexion</h2>
          <?php
          if(isset($erreur)) {
             echo '<h3>'.$erreur.'</h3>';
          }
          ?>
          <div class="form-group">
          <form method="POST" action="">
            <label>Adresse mail :</label>
            <input type="email" name="mailconnexion" class="form-control" placeholder="moncompte@worlder.net" required/>
            <br>
            <label>Mot de passe :</label>
            <input type="password" name="mdpconnexion" class="form-control" placeholder="Worlder09*" required/>
            <br>
            <input type="checkbox" name="rememberme" id="remembercheckbox" /> <label for="remembercheckbox">Se souvenir de moi</label>
            <br>
            <input type="submit" class="bouton" name="connexion" value="Connexion" />
          </form>
          </div>
          </div>
       </div>
       </center>
    </body>
 </html>
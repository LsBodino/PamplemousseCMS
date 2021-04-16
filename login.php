<?php
include_once 'includes/header.php';
include_once 'includes/login.php';
?>
 <html>
    <head>
       <title><?= $title ?>: Login</title>
       <meta charset="utf-8">
    </head>
    <body>
    <div class="container">
      <div class="row">
      <center>
          <h2>Login</h2>
          <?php
          if(isset($erreur)) {
             echo '<h3>'.$erreur.'</h3>';
          }
          ?>
          <div class="form-group">
          <form method="POST" action="">
            <label>Email address :</label>
            <input type="email" name="mailconnexion" class="form-control" required/>
            <br>
            <label>Password :</label>
            <input type="password" name="mdpconnexion" class="form-control" required/>
            <br>
            <input type="checkbox" name="rememberme" id="remembercheckbox" /> <label for="remembercheckbox">Remember me</label>
            <br>
            <input type="submit" class="bouton" name="connexion" value="Login" />
          </form>
          </div>
          </div>
       </div>
       </center>
    </body>
 </html>
<?php
include_once 'includes/header.php';
include_once 'includes/menu.php';
include_once 'includes/login.php';
?>
 <html>
    <head>
       <title><?= $title ?>: <?= $l_login ?></title>
       <meta charset="utf-8">
    </head>
    <body>
    <div class="container">
      <div class="row">
      <center>
          <h2><?= $l_login ?></h2>
          <?php
          if(isset($error)) {
            echo '<div class="alert alert-danger"><strong>'.$error.'</strong><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div>';
         }
          ?>
          <div class="form-group">
          <form method="POST" action="">
            <label><?= $l_email ?> :</label>
            <input type="email" name="maillogin" class="form-control" required/>
            <br>
            <label><?= $l_pw ?> :</label>
            <input type="password" name="pwlogin" class="form-control" required/>
            <br>
            <input type="checkbox" name="rememberme" id="remembercheckbox" /> <label for="remembercheckbox"><?= $l_rememberme ?></label>
            <br>
            <input type="submit" class="bouton" name="login" value="<?= $l_login ?>" />
          </form>
          </div>
          </div>
       </div>
       </center>
    </body>
 </html>
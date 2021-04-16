<?php
include_once 'includes/header.php';
include_once 'includes/profil.php';
?>
 <html>
    <head>
       <title><?= $title ?>: Edition de mon profil</title>
       <meta charset="utf-8">
    </head>
    <body>
    <div class="container">
      <div class="row">
      <center>
          <h2>Edition de mon profil</h2>
          <?php if(isset($msg)) {
            echo '<div class="alert alert-danger"><strong>'.$msg.'</strong><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div>';
         }?>
          <div class="form-group">
             <form method="POST" action="" enctype="multipart/form-data">
                <label>Adresse mail :</label>
                <input type="text" name="newmail" placeholder="Mail" class="form-control" value="<?php echo $user['mail']; ?>" /><br>
                <label>Mot de passe :</label>
                <input type="password" name="newmdp1" class="form-control" placeholder="Mot de passe"/><br>
                <label>Mot de passe - Confirmation :</label>
                <input type="password" name="newmdp2" class="form-control" placeholder="Confirmation du mot de passe" /><br>
                <input type="submit" class="bouton" value="Modifier" />
             </form>
             </div>
          </div>
       </div>
       </center>
    </body>
 </html>
 <?php include_once 'includes/footer.php'; ?>
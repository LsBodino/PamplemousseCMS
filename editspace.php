<?php
include_once 'includes/header.php';
include_once 'includes/profil.php';
?>
 <html>
    <head>
       <title><?= $title ?>: <?= $l_editspace ?></title>
       <meta charset="utf-8">
    </head>
    <body>
    <div class="container">
      <div class="row">
      <center>
          <h2><?= $l_editspace ?></h2>
          <?php if(isset($msg)) {
            echo '<div class="alert alert-danger"><strong>'.$msg.'</strong><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div>';
         }?>
          <div class="form-group">
             <form method="POST" action="" enctype="multipart/form-data">
                <label><?= $l_newemail ?> :</label>
                <input type="text" name="newmail" placeholder="<?= $l_newemail ?>" class="form-control" value="<?php echo $user['mail']; ?>" /><br>
                <label><?= $l_newpw ?> :</label>
                <input type="password" name="newmdp1" class="form-control" placeholder="<?= $l_newpw ?>"/><br>
                <label><?= $l_newpwc ?> :</label>
                <input type="password" name="newmdp2" class="form-control" placeholder="<?= $l_newpwc ?>" /><br>
                <input type="submit" class="bouton" value="<?= $l_edit ?>" />
             </form>
             </div>
          </div>
       </div>
       </center>
    </body>
 </html>
 <?php include_once 'includes/footer.php'; ?>
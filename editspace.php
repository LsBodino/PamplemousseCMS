<?php
include_once 'includes/header.php';
include_once 'includes/profil.php';
?>
 <html>
    <head>
       <title><?= $title ?>: Edit my space</title>
       <meta charset="utf-8">
    </head>
    <body>
    <div class="container">
      <div class="row">
      <center>
          <h2>Edit my space</h2>
          <?php if(isset($msg)) {
            echo '<div class="alert alert-danger"><strong>'.$msg.'</strong><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div>';
         }?>
          <div class="form-group">
             <form method="POST" action="" enctype="multipart/form-data">
                <label>Email address :</label>
                <input type="text" name="newmail" placeholder="Email address" class="form-control" value="<?php echo $user['mail']; ?>" /><br>
                <label>Password :</label>
                <input type="password" name="newmdp1" class="form-control" placeholder="Password"/><br>
                <label>Confirm password :</label>
                <input type="password" name="newmdp2" class="form-control" placeholder="Confirm password" /><br>
                <input type="submit" class="bouton" value="Edit" />
             </form>
             </div>
          </div>
       </div>
       </center>
    </body>
 </html>
 <?php include_once 'includes/footer.php'; ?>
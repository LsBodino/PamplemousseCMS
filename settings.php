<head>
<?php
include_once 'includes/header.php';
include_once 'includes/menu.php';
include_once 'includes/settings.php';
?>
<title><?= $title ?>: <?= $l_settings ?></title>
</head>
<body>
   <div class="container">
      <div class="row">
         <div class="center">
            <h2><?= $l_settings ?></h2>
            <?php if(isset($msg)) {
               echo '<div class="alert alert-danger"><strong>'.$msg.'</strong><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div>';
            }?>
            <div class="form-group">
               <form method="POST" action="" enctype="multipart/form-data">
                  <label><?= $l_newemail ?> :</label>
                  <input type="text" name="newmail" placeholder="<?= $l_newemail ?>" class="form-control" value="<?php echo $user['mail']; ?>" /><br>
                  <label><?= $l_newpw ?> :</label>
                  <input type="password" name="newpw1" class="form-control" placeholder="<?= $l_newpw ?>"/><br>
                  <label><?= $l_newpwc ?> :</label>
                  <input type="password" name="newpw2" class="form-control" placeholder="<?= $l_newpwc ?>" /><br>
                  <input type="submit" class="btn btn-danger btn-lg" value="<?= $l_edit ?>" />
               </form>
            </div>
         </div>
      </div>
   </div>
</body>
<?php include_once 'includes/footer.php'; ?>
<head>
<?php
include_once 'includes/header.php';
include_once 'includes/menu.php';
include_once 'includes/login.php';
?>
<title><?= $title ?>: <?= $l_login ?></title>
</head>
<body>
   <div class="container">
      <div class="row">
         <div class="center">
            <h2><?= $l_login ?></h2>
            <?php
            if(isset($error)) {
               echo '<div class="alert alert-danger" role="alert"><strong>'.$error.'</strong></div>';
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
               <label for="remembercheckbox"><?= $l_rememberme ?> :</label> 
               <input type="checkbox" class="form-check-input" name="rememberme" id="remembercheckbox" />
               <br><br>
               <input type="submit" class="btn btn-danger btn-lg" name="login" value="<?= $l_login ?>" />
               </form>
            </div>
         </div>
      </div>
   </div>
</body>
<?php include_once 'includes/footer.php'; ?>
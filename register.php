<head>
<?php
include_once 'includes/header.php';
include_once 'includes/menu.php';
include_once 'includes/register.php';
?>
<title><?= $l_register ?> | <?=$title?></title>
</head>
<body>
   <div class="center">
      <div class="container">
         <div class="row">
            <h2><?= $l_register ?></h2>
            <?php
            if(isset($error)) {
               echo '<div class="alert alert-danger" role="alert"><strong>'.$error.'</strong></div>';
            }
            if(isset($success)) {
               echo '<div class="alert alert-success" role="alert"><strong>'.$success.'</strong></div>';
            }
            ?>
            <div class="form-group">
               <form method="POST" action="">
                  <label for="username"><?= $l_username ?> :</label>
                  <input type="text" class="form-control" id="username" name="username" required value="<?php if(isset($username)) { echo $username; } ?>" />
                  <br>
                  <label for="mail"><?= $l_email ?> :</label>
                  <input type="email" class="form-control" id="mail" name="mail" required value="<?php if(isset($mail)) { echo $mail; } ?>" />
                  <br>
                  <label for="pw"><?= $l_pw ?> :</label>
                  <input type="password" class="form-control" id="pw" required name="pw" />
                  <br>
                  <label for="pw2"><?= $l_pw2 ?> :</label>
                  <input type="password" class="form-control" id="pw2" required name="pw2" />
                  <br>
                  <input type="submit" class="btn btn-danger btn-lg" name="register" value="<?= $l_lg ?>!" />
               </form>
            </div>
         </div>
      </div>
   </div>
</body>
<?php include_once 'includes/footer.php';?>
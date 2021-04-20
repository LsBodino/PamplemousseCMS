<?php
include_once 'includes/header.php';
include_once 'includes/a-menu.php';
include_once 'includes/a-config.php';
?>
 <html>
    <head>
       <title><?= $title ?>: <?= $l_panel ?> - <?= $l_config ?></title>
       <meta charset="utf-8">
    </head>
    <body>
    <div class="container">
      <div class="row">
      <center>
          <h2><?= $l_config ?></h2>
          <?php if(isset($msg)) {
            echo '<div class="alert alert-danger"><strong>'.$msg.'</strong><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div>';
         }?>
          <div class="form-group">
             <form method="POST" action="" enctype="multipart/form-data">
                <label><?= $l_name ?>:</label>
                <input type="text" name="wsname" class="form-control" value="<?php echo $config['wsname']; ?>" /><br>
                <label><?= $l_descr ?> :</label>
                <input type="text" name="wsdescr" class="form-control" value="<?php echo $config['wsdescr']; ?>"/><br>
                <label><?= $l_linkws ?> :</label>
                <input type="text" name="wslink" class="form-control" value="<?php echo $config['wslink']; ?>"/><br>
                <label><?= $l_langws ?> :</label>
                <input type="text" name="wslang" class="form-control" value="<?php echo $config['wslang']; ?>"/><br>
                <label><?= $l_theme ?> :</label>
                <input type="text" name="wstheme" class="form-control" value="<?php echo $config['wstheme']; ?>"/><br>
                <input type="submit" class="bouton" name="configuration" value="<?= $l_edit ?>" />
             </form>
             </div>
          </div>
       </div>
       </center>
    </body>
 </html>
 <?php include_once 'includes/footer.php'; ?>
<html>
<head>
<?php
include_once 'includes/header.php';
include_once 'includes/a-menu.php';
include_once 'includes/a-config.php';
?>
      <title><?= $title ?>: <?= $l_panel ?> - <?= $l_config ?></title>
      <meta charset="utf-8">
   </head>
   <body>
   <div class="container">
      <div class="row">
         <div class="center">
            <h2><?= $l_config ?></h2>
            <div class="form-group">
               <form method="POST" action="" enctype="multipart/form-data">
               <label><?= $l_name ?> :</label>
               <input type="text" name="wsname" id="wsname" class="form-control" value="<?php echo $config['wsname']; ?>" required/><br>
               <label><?= $l_descr ?> :</label>
               <input type="text" name="wsdescr" id="wsdescr" class="form-control" value="<?php echo $config['wsdescr']; ?>"/><br>
               <label><?= $l_linkws ?> :</label>
               <input type="text" name="wslink" id="wslink" class="form-control" value="<?php echo $config['wslink']; ?>" required/><br>
               <label><?= $l_langws ?> <i>(<a href="https://github.com/LsBodino/PamplemousseCMS/wiki/Add-a-language" target="_blank"><?= $l_doclangws ?></a>)</i> :</label>
               <input type="text" name="wslang" id="wslang" class="form-control" value="<?php echo $config['wslang']; ?>" required/><br>
               <label><?= $l_theme ?> :</label>
               <input type="text" name="wstheme" id="wstheme" class="form-control" value="<?php echo $config['wstheme']; ?>" required/><br>
               <input type="submit" class="bouton" value="<?= $l_edit ?>" />
               </form>
            </div>
         </div>
      </div>
   </div>
</body>
</html>
 <?php include_once 'includes/footer.php'; ?>
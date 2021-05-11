<head>
<?php
include_once 'includes/header.php';
include_once 'includes/a-menu.php';
include_once 'includes/a-createarticles.php';
?>
<style>
textarea.form-control {
   height: 50%;
}
</style>
   <script src="https://cdn.ckeditor.com/4.16.0/full/ckeditor.js"></script>
   <title><?= $title ?>: <?= $l_panel ?> - <?= $l_createarticle ?></title>
</head>
<body>
   <div class="center">
      <div class="container">
         <div class="row">
            <h2><?= $l_createarticle ?></h2>
            <?php if(isset($msg)) {
               echo '<div class="alert alert-success" role="alert"><strong>'.$msg.'</strong></div>';
               } ?>
               <form method="POST">
                  <div class="form-group">
                     <label><?= $l_name ?> :</label>
                     <input type="text" name="article_title" id="article_title" class="form-control" placeholder="<?= $l_name ?>" required/><br>
                     <label><?= $l_descr ?> :</label>
                     <input type="text" name="article_descr" id="article_descr" class="form-control" placeholder="<?= $l_descr ?>" required/><br>
                     <label><?= $l_image ?> :</label>
                     <input type="url" name="article_img" id="article_img" class="form-control" placeholder="<?= $l_image ?>" required/><br>
                     <label><?= $l_section ?> :</label> 
                     <textarea name="article_section" id="article_section" class="form-control" row="25" cols="100" placeholder="<?= $l_section ?>" required></textarea>
                     <script>
                     CKEDITOR.replace( 'article_section' );
                     </script><br>
                     <label><?= $l_articlepin ?> :</label> 
                     <input type="checkbox" class="form-check-input" name="article_pin" />
                  </div>
                  <br>
                  <input type="submit" class="btn btn-danger btn-lg" value="<?= $l_publish ?>" />
               </form>
         </div>
      </div>
   </div>
</body>
<?php include_once 'includes/footer.php';?>
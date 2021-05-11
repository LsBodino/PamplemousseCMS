<head>
<?php
include_once 'includes/header.php';
include_once 'includes/a-menu.php';
include_once 'includes/a-editarticles.php';

if(isset($_GET['id']) AND $_GET['id'] > 0) {
   $getid = intval($_GET['id']);
   $reqarticle = $db->prepare('SELECT * FROM articles WHERE id = ?');
   $reqarticle->execute(array($getid));
   $idexist = $reqarticle->rowCount();
   $infoa = $reqarticle->fetch();
   if($idexist == 0){ 
      header("Location: /404");
   }else{
?>

<style> textarea.form-control {
   height: 50%;
   } </style>
<script src="https://cdn.ckeditor.com/4.16.0/full/ckeditor.js"></script>
<title><?= $l_panel ?> - <?= $l_editarticle ?> | <?= $title ?></title>
</head>
<body>
   <div class="center">
      <div class="container">
         <div class="row">
            <h2><?= $l_editarticle ?></h2>
            <?php if(isset($msg)) {
               echo '<div class="alert alert-success" role="alert"><strong>'.$msg.'</strong></div';
               } ?>
               <form method="POST">
                  <div class="form-group">
                     <label><?= $l_name ?> :</label>
                     <input type="text" name="article_title" id="article_title" class="form-control" value="<?= $infoa['title'] ?>" required/><br>
                     <label><?= $l_descr ?> :</label>
                     <input type="text" name="article_descr" id="article_descr" class="form-control" value="<?= $infoa['descr'] ?>" required/><br>
                     <label><?= $l_image ?> :</label>
                     <input type="text" name="article_img" id="article_img" class="form-control" value="<?= $infoa['img'] ?>" required/><br>
                     <label><?= $l_section ?> :</label>
                     <textarea name="article_section" id="article_section" class="form-control" row="25" cols="100"><?= $infoa['section'] ?></textarea>
                     <script>
                     CKEDITOR.replace( 'article_section' );
                     </script>
                     <br>
                     <label><?= $l_articlepin ?> :</label>
                     <?php if($infoa['pin'] == 1){ ?>
                        <input type="checkbox" class="form-check-input" name="article_pin" checked/>
                     <?php }else{ ?>
                        <input type="checkbox" class="form-check-input" name="article_pin" />
                     <?php } ?>
                  </div>
                  <input type="submit" class="btn btn-danger btn-lg" value="<?= $l_publish ?>" />
               </form>
         </div>
      </div>
   </div>
</body>
<?php } } 
include_once 'includes/footer.php';?>
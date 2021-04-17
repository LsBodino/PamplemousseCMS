<head>
<?php include 'includes/header.php';
include 'includes/articles.php';
?>
 <style> textarea.form-control {
    height: 50%;
} </style>
<title><?= $title ?>: <?= $l_panel ?> - <?= $l_createarticle ?></title>
</head>
<body>
<center>
<div class="container">
<div class="row">
<h2><?= $l_createarticle ?></h2>
<?php if(isset($message)) {
            echo '<div class="alert alert-success alert-dismissable"><strong>'.$message.'</strong><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div>';
         } ?>
<form method="POST">
<div class="form-group">
      <input type="text" name="article_titre" id="article_titre" class="form-control" placeholder="<?= $l_name ?>" required/>
      <br>
	  <input type="text" name="article_descr" id="article_descr" class="form-control" placeholder="<?= $l_descr ?>" required/>
      <br>
	  <input type="text" name="article_img" id="article_img" class="form-control" placeholder="<?= $l_image ?>" required/>
      <br>
      <textarea name="article_contenu" id="article_contenu" class="form-control" row="25" cols="100" placeholder="<?= $l_section ?>" required></textarea>
      </div>
      <input type="submit" class="bouton" value="<?= $l_publish ?>" />
   </form>
</div></div>
</center>
</body>
<?php include 'includes/footer.php';?>

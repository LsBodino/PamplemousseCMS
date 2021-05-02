<head>
<?php include_once 'includes/header.php';
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
<title><?= $title ?>: <?= $l_panel ?> - <?= $l_editarticle ?></title>
</head>
<body>
<center>
<div class="container">
<div class="row">
<h2><?= $l_editarticle ?></h2>
<?php if(isset($message)) {
            echo '<div class="alert alert-success alert-dismissable"><strong>'.$message.'</strong><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div>';
         } ?>
<form method="POST">
<div class="form-group">
      <input type="text" name="article_title" id="article_title" class="form-control" value="<?= $infoa['title'] ?>" required/>
      <br>
	  <input type="text" name="article_descr" id="article_descr" class="form-control" value="<?= $infoa['descr'] ?>" required/>
      <br>
	  <input type="text" name="article_img" id="article_img" class="form-control" value="<?= $infoa['img'] ?>" required/>
      <br>
      <textarea name="article_section" id="article_section" class="form-control" row="25" cols="100"><?= $infoa['section'] ?></textarea>
      <script>
         CKEDITOR.replace( 'article_section' );
      </script>
      </div>
      <input type="submit" class="bouton" value="<?= $l_publish ?>" />
   </form>
</div></div>
</center>
</body>
<?php } }
include_once 'includes/footer.php';?>
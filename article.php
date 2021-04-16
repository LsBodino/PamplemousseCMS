<?php
include_once 'includes/header.php';
if(isset($_GET['id']) AND $_GET['id'] > 0) {
    $getid = intval($_GET['id']);
    $reqarticle = $db->prepare('SELECT * FROM articles WHERE id = ?');
    $reqarticle->execute(array($getid));
    $infoa = $reqarticle->fetch();
 ?>
<html>
   <head>
      <title><?= $title ?>: <?php echo $infoa['titre']; ?></title>
      <meta charset="utf-8">
   </head>
   <body>
   <div class="container">
      <div class="row">
      <center>
	  <img src="<?php echo $infoa['img']; ?>">
         <h2><?php echo $infoa['titre']; ?></h2>
         <h4><?php echo $infoa['descr']; ?></h4>
         <?php echo nl2br($infoa['contenu']); ?>
         <br>
      </div></div>
      </center>
   </body>
</html>
<?php   
}
include_once 'includes/footer.php';
?>
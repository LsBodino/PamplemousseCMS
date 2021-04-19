<?php
include_once 'includes/header.php';
if(isset($_GET['id']) AND $_GET['id'] > 0) {
    $getid = intval($_GET['id']);
    $requser = $db->prepare('SELECT * FROM membres WHERE id = ?');
    $requser->execute(array($getid));
    $infom = $requser->fetch();
 ?>
<html>
   <head>
      <title><?= $title ?>: <?= $l_spaceof ?> <?php echo $infom['pseudo']; ?></title>
      <meta charset="utf-8">
   </head>
   <body>
   <div class="container">
      <div class="row">
      <center>
         <h2><?= $l_spaceof ?> <?php echo $infom['pseudo']; ?></h2>
         <b><?= $l_pseudo ?>:</b> <?php echo $infom['pseudo']; ?><br>
         <b><?= $l_rank ?>:</b> <?php echo $infom['rank']; ?>
         <br>
         <?php
         if(isset($_SESSION['id']) AND $infom['id'] == $_SESSION['id']) {
         ?>
         <br>
         <a href="<?= $link?>/editspace"><?= $l_editspace ?></a><br>
         <a href="<?= $link?>/logout"><?= $l_logout ?></a><br><br>
		 <?php if($infom['rank'] == 1){ ?>
		 <a href="<?= $link?>/a-articles"><?= $l_createarticle ?></a><br>
         <a href="<?= $link?>/a-pages"><?= $l_createpage ?></a><br>
		 <a href="<?= $link?>/a-config"><?= $l_configuration ?></a><br><br>
         <?php
         } }
         ?>
      </div></div>
      </center>
   </body>
</html>
<?php   
}
include_once 'includes/footer.php';
?>
<?php
include_once 'includes/header.php';
include_once 'includes/menu.php';
if(isset($_GET['id']) AND $_GET['id'] > 0) {
    $getid = intval($_GET['id']);
    $requser = $db->prepare('SELECT * FROM users WHERE id = ?');
    $requser->execute(array($getid));
    $idexist = $requser->rowCount();
    $infom = $requser->fetch();
    if($idexist == 0){ 
   header("Location: /404");
    }else{
 ?>
<html>
   <head>
      <title><?= $title ?>: <?= $l_spaceof ?> <?php echo $infom['username']; ?></title>
      <meta charset="utf-8">
   </head>
   <body>
   <div class="container">
      <div class="row">
      <center>
         <h2><?= $l_spaceof ?> <?php echo $infom['username']; ?></h2>
         <b><?= $l_username ?>:</b> <?php echo $infom['username']; ?><br>
         <b><?= $l_rank ?>:</b>
         <?php if($infom['rank'] == 0){ echo $l_member; }
         if($infom['rank'] == 1){ echo $l_editor; }
         if($infom['rank'] == 2){ echo $l_admin; } ?>
         <br>
         <?php
         if(isset($_SESSION['id']) AND $infom['id'] == $_SESSION['id']) {
         ?>
         <br>
         <a href="<?= $link?>/settings"><?= $l_settings ?></a><br>
         <a href="<?= $link?>/logout"><?= $l_logout ?></a><br><br>
		 <?php if($infom['rank'] >= 1){ ?>
		 <a href="<?= $link?>/panel/articles"><?= $l_listarticles ?></a><br>
         <a href="<?= $link?>/panel/pages"><?= $l_createpage ?></a><br>
         <?php if($infom['rank'] >= 2){ ?>
		 <a href="<?= $link?>/panel/configuration"><?= $l_configuration ?></a><br><br>
         <?php
         } } }
         ?>
      </div></div>
      </center>
   </body>
</html>
<?php   
} }
include_once 'includes/footer.php';
?>
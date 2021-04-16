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
      <title><?= $title ?>: <?php echo $infom['pseudo']; ?>'s Space</title>
      <meta charset="utf-8">
   </head>
   <body>
   <div class="container">
      <div class="row">
      <center>
         <h2><?php echo $infom['pseudo']; ?>'s Space</h2>
         <b>Pseudo:</b> <?php echo $infom['pseudo']; ?><br>
         <b>Rank:</b> <?php echo $infom['rank']; ?>
         <br>
         <?php
         if(isset($_SESSION['id']) AND $infom['id'] == $_SESSION['id']) {
         ?>
         <br>
         <a href="<?= $link?>/editspace">Edit my space</a><br>
         <a href="<?= $link?>/logout">Disconnect</a><br><br>
		 <?php if($infom['rank'] == 1){ ?>
		 <a href="<?= $link?>/a-articles">Create a article</a><br>
         <a href="<?= $link?>/a-pages">Create a page</a><br>
		 <a href="<?= $link?>/a-config">Configuration</a><br><br>
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
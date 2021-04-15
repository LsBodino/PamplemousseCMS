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
      <title><?= $title ?>: Profil de <?php echo $infom['pseudo']; ?></title>
      <meta charset="utf-8">
   </head>
   <body>
   <div class="container">
      <div class="row">
      <center>
         <h2>Profil de <?php echo $infom['pseudo']; ?></h2>
         <b>Pseudo:</b> <?php echo $infom['pseudo']; ?><br>
         <b>Grade:</b> <?php echo $infom['rank']; ?>
         <br>
         <?php
         if(isset($_SESSION['id']) AND $infom['id'] == $_SESSION['id']) {
         ?>
         <br>
         <a href="<?= $link?>/editerprofil">Modifier mon profil</a><br>
         <a href="<?= $link?>/logout">Se déconnecter</a>
         <?php
         }
         ?>
      </div></div>
      </center>
   </body>
</html>
<?php   
}
include_once 'includes/footer.php';
?>
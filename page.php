<?php
include_once 'includes/header.php';
if(isset($_GET['id']) AND $_GET['id'] > 0) {
    $getid = intval($_GET['id']);
    $reqpage = $db->prepare('SELECT * FROM pages WHERE id = ?');
    $reqpage->execute(array($getid));
    $infop = $reqpage->fetch();
 ?>
<html>
   <head>
      <title><?= $title ?>: <?php echo $infop['titre']; ?></title>
      <meta charset="utf-8">
   </head>
   <body>
   <div class="container">
      <div class="row">
      <center>
         <h2><?php echo $infop['titre']; ?></h2>
         <?php echo nl2br($infop['contenu']); ?>
         <br>
      </div></div>
      </center>
   </body>
</html>
<?php   
}
include_once 'includes/footer.php';
?>
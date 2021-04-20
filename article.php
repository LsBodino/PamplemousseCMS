<?php
include_once 'includes/header.php';
include_once 'includes/menu.php';
if(isset($_GET['id']) AND $_GET['id'] > 0) {
    $getid = intval($_GET['id']);
    $reqarticle = $db->prepare('SELECT * FROM articles WHERE id = ?');
    $reqarticle->execute(array($getid));
    $articleexist = $reqarticle->rowCount();
    $infoa = $reqarticle->fetch();
    if($articleexist == 0){ 
      header("Location: /404");
       }else{
 ?>
<html>
   <head>
      <title><?= $title ?>: <?php echo $infoa['title']; ?></title>
      <meta charset="utf-8">
   </head>
   <body>
   <div class="container">
      <div class="row">
      <center>
	  <img src="<?php echo $infoa['img']; ?>">
         <h3><?php echo $infoa['title']; ?></h3>
         <h4><?php echo $infoa['descr']; ?></h4><br>
         <?php echo $infoa['section']; ?>
         <br>
      </div></div>
      </center>
   </body>
</html>
<?php   
} }
include_once 'includes/footer.php';
?>
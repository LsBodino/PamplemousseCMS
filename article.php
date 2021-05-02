<?php
include_once 'includes/header.php';
include_once 'includes/menu.php';
if(isset($_GET['id']) AND $_GET['id'] > 0) {
    $getid = intval($_GET['id']);
    $reqarticle = $db->prepare('SELECT * FROM articles WHERE id = ? AND visible = 1');
    $reqarticle->execute(array($getid));
    $articleexist = $reqarticle->rowCount();
    $infoa = $reqarticle->fetch();
    if($articleexist == 0){ 
      header("Location: /error/404");
       }else{
 ?>
<html>
   <head>
      <title><?= $title ?>: <?php echo $infoa['title']; ?></title>
   </head>
   <body>
   <div class="col-md-12">
   <div class="container">
   <div class="jumbotron">
	  <center><img class="img-rounded" src="<?php echo $infoa['img']; ?>">
         <h2><?php echo $infoa['title']; ?></h2>
         <h4><?php echo $infoa['descr']; ?></h4></center>
         <div class="jumbotron-contents">
         <p><?php echo $infoa['section']; ?></p>
         <br>
         </div></div></div></div>
   </body>
</html>
<?php   
} }
include_once 'includes/footer.php';
?>
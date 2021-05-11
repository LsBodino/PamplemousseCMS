<?php
include_once 'includes/header.php';
include_once 'includes/menu.php';
if(isset($_GET['id']) AND $_GET['id'] > 0) {
    $getid = intval($_GET['id']);
    $reqarticle = $db->prepare('SELECT * FROM articles WHERE id = ? AND visible = 1');
    $reqarticle->execute(array($getid));
    $articleexist = $reqarticle->rowCount();
    $infoa = $reqarticle->fetch();
    $reqauthor = $db->prepare('SELECT * FROM users WHERE id = ?');
    $reqauthor->execute(array($infoa['id_author']));
    $infou = $reqauthor->fetch();
    $date = date_create();
    date_timestamp_set($date, $infoa['datep']);
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
	<div class="center">
   <img class="img-rounded" src="<?php echo $infoa['img']; ?>">
         <h2><?php echo $infoa['title']; ?></h2>
         <h6><?php echo $infoa['descr']; ?></h6>
         <?= $l_published ?> <?php echo date_format($date, 'd-m-Y H:i'); ?> <?= $l_by ?> <?php echo $infou['username']; ?></div>
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
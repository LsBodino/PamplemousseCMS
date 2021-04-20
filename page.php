<?php
include_once 'includes/header.php';
include_once 'includes/menu.php';
if(isset($_GET['id']) AND $_GET['id'] > 0) {
    $getid = intval($_GET['id']);
    $reqpage = $db->prepare('SELECT * FROM pages WHERE id = ?');
    $reqpage->execute(array($getid));
    $pageexist = $reqpage->rowCount();
    $infop = $reqpage->fetch();
    if($pageexist == 0){ 
      header("Location: /404");
       }else{
 ?>
<html>
   <head>
      <title><?= $title ?>: <?php echo $infop['title']; ?></title>
      <meta charset="utf-8">
   </head>
   <body>   
   <div class="col-md-12">
   <div class="jumbotron">
   <div class="jumbotron-contents">
   <div class="row">
      <center><h2><?php echo $infop['title']; ?></h2></center>
         <p><?php echo $infop['section']; ?></p>
         <br>
      </div></div></div></div>
   </body>
</html>
<?php   
} }
include_once 'includes/footer.php';
?>
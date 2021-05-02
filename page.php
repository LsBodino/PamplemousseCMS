<?php
include_once 'includes/header.php';
include_once 'includes/menu.php';
if(isset($_GET['id']) AND $_GET['id'] > 0) {
    $getid = intval($_GET['id']);
    $reqpage = $db->prepare('SELECT * FROM pages WHERE id = ? AND visible = 1');
    $reqpage->execute(array($getid));
    $pageexist = $reqpage->rowCount();
    $infop = $reqpage->fetch();
    if($pageexist == 0){ 
      header("Location: /error/404");
       }else{
 ?>
<html>
   <head>
      <title><?= $title ?>: <?php echo $infop['title']; ?></title>
   </head>
   <body>   
   <div class="col-md-12">
   <div class="container">
   <div class="jumbotron">
      <center><h2><?php echo $infop['title']; ?></h2></center>
      <div class="jumbotron-contents">
         <p><?php echo $infop['section']; ?></p>
         <br>
      </div></div></div></div>
   </body>
</html>
<?php } } include_once 'includes/footer.php'; ?>
<head>
<?php
include_once 'includes/header.php';
include_once "includes/menu.php";
?>
<title><?= $l_homepage ?> | <?= $title ?></title>
</head>
<body>
<div class="container">
  <?php if(!isset($_SESSION['id'])) { ?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong><?= $l_notregistered ?></strong>
      <p><?= $l_notregistered2 ?> <?=$title?>. <?= $l_notregistered3 ?>! 😁</p>
    </div>
  <?php } ?>
  <div class="center">
    <h2><?= $l_homepage ?></h2>
    <h3><?= $l_mostrecenta ?></h3>
    
    <div class="row">
    <?php 
    $articlespin = NULL;
    $articlespin = $db->query('SELECT * FROM articles WHERE visible = 1 AND pin = 1 ORDER by id DESC LIMIT 4');
    while($ap = $articlespin->fetch()) { ?>
      <div class="col-sm-6 col-md-3">
        <div class="card">
          <img class="card-img-top" src="<?= $ap['img'] ?>">
            <h5 class="card-title"><?= $ap['title'] ?> 📌</h5>
            <p class="card-text"><?= $ap['descr'] ?></p>
            <a href="<?=$link?>/article/<?= $ap['id'] ?>" class="btn btn-primary"><?= $l_read ?> >></a>
          </div>
        </div>

    <?php }
    $articles = NULL;
    $articles = $db->query('SELECT * FROM articles WHERE visible = 1 AND pin = 0 ORDER by id DESC LIMIT 8');
    while($a = $articles->fetch()) { ?>
      <div class="col-sm-6 col-md-3">
        <div class="card">
          <img class="card-img-top" src="<?= $a['img'] ?>">
            <h5 class="card-title"><?= $a['title'] ?></h5>
            <p class="card-text"><?= $a['descr'] ?></p>
            <a href="<?=$link?>/article/<?= $a['id'] ?>" class="btn btn-primary"><?= $l_read ?> >></a>
          </div>
        </div>
    <?php } ?>
  </div>
  </div>
</div>
</body>
<?php include_once 'includes/footer.php';?>
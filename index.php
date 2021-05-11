<head>
<?php
include_once 'includes/header.php';
include_once "includes/menu.php";
?>
<title><?= $title ?>: <?= $l_homepage ?></title>
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
    
    <?php 
    $articlespin = NULL;
    $articlespin = $db->query('SELECT * FROM articles WHERE visible = 1 AND pin = 1 ORDER by id DESC LIMIT 4');
    while($ap = $articlespin->fetch()) { ?>
      <div class="col-sm-6 col-md-3">
        <div class="thumbnail">
          <img class="img-thumbnail" src="<?= $ap['img'] ?>">
          <div class="caption text-center">
            <h4><?= $ap['title'] ?> 📌</h4>
            <p><?= $ap['descr'] ?></p>
            <a href="<?=$link?>/article/<?= $ap['id'] ?>" class="btn btn-primary" role="button"><?= $l_read ?> >></a>
          </div>
        </div>
      </div>

    <?php }
    $articles = NULL;
    $articles = $db->query('SELECT * FROM articles WHERE visible = 1 AND pin = 0 ORDER by id DESC LIMIT 8');
    while($a = $articles->fetch()) { ?>
    <div class="col-sm-6 col-md-3">
      <div class="thumbnail">
        <img class="img-thumbnail" src="<?= $a['img'] ?>">
          <div class="caption text-center">
            <h4><?= $a['title'] ?></h4>
            <p><?= $a['descr'] ?></p>
            <p><a href="<?=$link?>/article/<?= $a['id'] ?>" class="btn btn-primary" role="button"><?= $l_read ?> >></a></p>
          </div>
      </div>
    </div>
    <?php } ?>
  </div>
</div>
</body>
<?php include_once 'includes/footer.php';?>
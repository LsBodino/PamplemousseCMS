<head>
<?php include_once 'includes/header.php';?>
<title><?= $title ?>: <?= $l_house ?></title>
<div class="container">
<?php if(!isset($_SESSION['id'])) { ?>
<div class="alert alert-info">
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
<h4><?= $l_notregistered ?></h4>
<p><?= $l_notregistered2 ?> <?=$title?>. <?= $l_notregistered3 ?>! :)</p><br>
<a class="btn btn-primary" href="<?=$link?>/register"><?= $l_register ?></a>
</div>
<?php } ?>
</head>
<body>
<center><h2><?= $l_house ?></h2>
<!-- Hey ;). -->
<div class="row">
<h3><?= $l_mostrecenta ?></h3></center>
<?php 
$articles = NULL;
$articles = $db->query('SELECT * FROM articles ORDER by id DESC LIMIT 8');
while($a = $articles->fetch()) { ?>
<div class="col-sm-6 col-md-3">
<div class="thumbnail">
                <img class="img-rounded" src="<?= $a['img'] ?>">
                <div class="caption text-center">
                  <h3><?= $a['titre'] ?></h3>
                  <p><?= $a['descr'] ?></p>
                  <p><a href="<?=$link?>/article/<?= $a['id'] ?>" class="btn btn-warning" role="button"><?= $l_read ?> >></a></p>
                </div></div></div>
                <?php } ?>

</div></div>
</body>
<?php include_once 'includes/footer.php';?>
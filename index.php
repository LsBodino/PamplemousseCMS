<head>
<?php include_once 'includes/header.php';?>
<title><?= $title ?>: House</title>
<div class="container">
<?php if(!isset($_SESSION['id'])) { ?>
<div class="alert alert-info">
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
<h4>Hey, you’re not registered yet on !</h4>
<p>I see you’re still not registered on <?=$title?>. Sign up to share your contributions to the community! :)</p><br>
<a class="btn btn-primary" href="<?=$link?>/register">Register</a>
</div>
<?php } ?>
</head>
<body>
<center><h2>House</h2>
<!-- Hey ;). -->
<div class="row">
<h3>Most recent articles</h3></center>
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
                  <p><a href="<?=$link?>/article/<?= $a['id'] ?>" class="btn btn-warning" role="button">Read >></a></p>
                </div></div></div>
                <?php } ?>

</div></div>
</body>
<?php include_once 'includes/footer.php';?>
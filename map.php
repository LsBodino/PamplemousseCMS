<head>
<?php include 'includes/header.php';?>
<title><?= $title ?>: <?= $l_map ?></title>
</head>
<body>
<center>
<h2><?= $l_map ?></h2>
<a href="<?= $link ?>/index"><?= $l_house ?></a><br>
<a href="<?= $link ?>/map"><?= $l_map ?></a><br><br>
<?= $l_pages ?><br>
<?php $pages = NULL;
$pages = $db->query('SELECT * FROM pages ORDER by id DESC');
while($p = $pages->fetch()) { ?>
<?= $l_pages ?> > <a href="<?= $link?>/page/<?= $p['id'] ?>"><?= $p['titre'] ?></a><br>
<?php } ?><br>
<?= $l_space ?><br>
<?php if(isset($_SESSION['id'])) { ?>
<?= $l_space ?> > <a href="<?= $link ?>/space/<?= $_SESSION['id'] ?>"><?= $l_myspace ?></a><br>
<?= $l_space ?> > <a href="<?= $link ?>/logout"><?= $l_logout ?></a><br><br>
<?php }else{ ?>
<?= $l_space ?> > <a href="<?= $link ?>/register"><?= $l_register ?></a><br>
<?= $l_space ?> > <a href="<?= $link ?>/login"><?= $l_login ?></a><br><br>
<?php } ?>
</center>
</body>
<?php include 'includes/footer.php';?>
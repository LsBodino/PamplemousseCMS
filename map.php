<head>
<?php include_once 'includes/header.php';
include_once "includes/menu.php";?>
<title><?= $title ?>: <?= $l_map ?></title>
</head>
<body>
<center>
<h2><?= $l_map ?></h2>
<a href="<?= $link ?>/index"><?= $l_homepage ?></a><br>
<a href="<?= $link ?>/map"><?= $l_map ?></a><br>

<h4><?= $l_pages ?></h4>
<?php $pages = NULL;
$pages = $db->query('SELECT * FROM pages ORDER by id DESC');
while($p = $pages->fetch()) { ?>
<?= $l_pages ?> > <a href="<?= $link?>/page/<?= $p['id'] ?>"><?= $p['title'] ?></a><br>
<?php } ?>

<?php if(isset($_SESSION['id'])) { ?>
<?php if($user['rank'] >= 1){ ?>
<h4><?= $l_panel ?></h4>
<?= $l_panel ?> > <a href="<?= $link ?>/panel/articles"><?= $l_createarticle ?></a><br>
<?= $l_panel ?> > <a href="<?= $link ?>/panel/pages"><?= $l_createpage ?></a><br>
<?php }if($user['rank'] == 2){ ?>
<?= $l_panel ?> > <a href="<?= $link ?>/panel/configuration"><?= $l_config ?></a><br>
<?php } ?>

<h4><?= $l_space ?></h4>
<?= $l_space ?> > <a href="<?= $link ?>/space/<?= $_SESSION['id'] ?>"><?= $l_myspace ?></a><br>
<?= $l_space ?> > <a href="<?= $link ?>/settings"><?= $l_settings ?></a><br>
<?= $l_space ?> > <a href="<?= $link ?>/logout"><?= $l_logout ?></a><br>
<?php }else{ ?>
<h4><?= $l_space ?></h4>
<?= $l_space ?> > <a href="<?= $link ?>/register"><?= $l_register ?></a><br>
<?= $l_space ?> > <a href="<?= $link ?>/login"><?= $l_login ?></a><br>
<?php } ?>

</center>
</body>
<?php include_once 'includes/footer.php';?>
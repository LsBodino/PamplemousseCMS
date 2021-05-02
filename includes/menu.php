<center>
<div class="jumbotron text-center">
<h1><?= strtoupper($title)?></h1>
<br>
<div class="container">
<div class="row">
<div class="col-md-12">
<p><?= $descr?></p>
<ul class="nav nav-pills nav-justified">
<li class="active"><a href="<?= $link?>/index"><?= $l_homepage?></a></li>
<?php $pages = NULL;
$pages = $db->query('SELECT * FROM pages WHERE visible = 1 ORDER by id DESC');
while($p = $pages->fetch()) { ?>
<li><a href="<?= $link?>/page/<?= $p['id'] ?>"><?= $p['title'] ?></a></li>
<?php } ?>
<?php if(!isset($_SESSION['id'])) { ?>
<li><a href="<?= $link?>/register"><?= $l_register?></a></li>
<li><a href="<?= $link?>/login"><?= $l_login?></a></li>
<?php }else{ ?>
<li><a href="<?= $link?>/space/<?= $_SESSION['id'] ?>"><?= $l_myspace?></a></li>
<li><a href="<?= $link?>/logout"><?= $l_logout?></a></li>
<?php } ?>
</ul></div></div></div></div>
</center>
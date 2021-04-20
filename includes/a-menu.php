<center>
<div class="jumbotron text-center">
<h1><?= strtoupper($title)?></h1>
<br>
<div class="container">
<div class="row">
<div class="col-md-12">
<p><?= $descr?></p>
<ul class="nav nav-pills nav-justified">
<li class="active"><a href="<?= $link?>/index"><?= $l_backws?></a></li>
<li><a href="<?= $link?>/panel/articles"><?= $l_articles?></a></li>
<li><a href="<?= $link?>/panel/pages"><?= $l_pages?></a></li>
<li><a href="<?= $link?>/panel/configuration"><?= $l_configuration?></a></li>
</ul></div></div></div></div>
</center>
<?php
if(isset($_SESSION['id'])){
    if($user['rank'] >= 1){ ?>
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
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?= $l_articles?> <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a href="<?= $link?>/panel/create/articles"><?= $l_create?></a></li>
                <li><a href="<?= $link?>/panel/articles"><?= $l_list?></a></li>
            </ul>
        </li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?= $l_pages?> <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a href="<?= $link?>/panel/create/pages"><?= $l_create?></a></li>
                <li><a href="<?= $link?>/panel/pages"><?= $l_list?></a></li>
            </ul>
        </li>
        <li><a href="<?= $link?>/panel/configuration"><?= $l_config?></a></li>
        </ul></div></div></div></div>
        </center>
<?php } } ?> 
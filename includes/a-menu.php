<?php
if(isset($_SESSION['id'])){
    if($user['rank'] >= 1){ ?>
        <div class="center">
            <div class="jumbotron text-center">
                <h1><?= strtoupper($title)?></h1>
                <br>
                <p><?= $descr?></p>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="menu">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="<?= $link?>/index"><?= $l_backws?></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="menuArticles" role="button" data-bs-toggle="dropdown" aria-expanded="false"><?= $l_articles?></a>
                            <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                                <li><a class="dropdown-item" href="<?= $link?>/panel/create/articles"><?= $l_create?></a></li>
                                <li><a class="dropdown-item" href="<?= $link?>/panel/articles"><?= $l_list?></a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="menupages" role="button" data-bs-toggle="dropdown" aria-expanded="false"><?= $l_pages?></a>
                            <ul class="dropdown-menu" aria-labelledby="menupages">
                                <li><a class="dropdown-item" href="<?= $link?>/panel/create/pages"><?= $l_create?></a></li>
                                <li><a class="dropdown-item" href="<?= $link?>/panel/pages"><?= $l_list?></a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="menuconfig" role="button" data-bs-toggle="dropdown" aria-expanded="false"><?= $l_config?></a>
                            <ul class="dropdown-menu" aria-labelledby="menuconfig">
                                <li><a class="dropdown-item" href="<?= $link?>/panel/configuration"><?= $l_config?></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
<?php } } ?> 
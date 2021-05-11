<div class="center">
    <div class="jumbotron text-center">
        <h1><?= strtoupper($title)?></h1>
        <br>
            <p><?= $descr?></p>
    </div>
</div>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="<?= $link?>/index"><?= $l_homepage?></a>
                </li>
                <?php $pages = NULL;
                $pages = $db->query('SELECT * FROM pages WHERE visible = 1 ORDER by id DESC');
                while($p = $pages->fetch()) { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= $link?>/page/<?= $p['id'] ?>"><?= $p['title'] ?></a>
                    </li>
                <?php } ?>
                <?php if(!isset($_SESSION['id'])) { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= $link?>/register"><?= $l_register?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= $link?>/login"><?= $l_login?></a>
                    </li>
                <?php }else{ ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= $link?>/space/<?= $_SESSION['id'] ?>"><?= $l_myspace?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= $link?>/logout"><?= $l_logout?></a>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>
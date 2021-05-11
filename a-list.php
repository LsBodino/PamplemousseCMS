<?php 	
include_once 'includes/header.php';
include_once 'includes/a-menu.php';
if(isset($_SESSION['id'])){
    if($user['rank'] >= 1){ 
        switch($_GET['type'])
        {
            default:
            header("Location: /error/405");
            break;
            case 'articles':?>
            <title><?= $title ?>: <?= $l_panel?> - <?= $l_listarticles?></title>
            <div class="container">
                <div class="center"> 
                    <h2><?= $l_listarticles?></h2>
                </div>
                <div class="list-group">
                    <?php $articles = NULL;
                    $articles = $db->query('SELECT * FROM articles WHERE visible = 1 ORDER by id DESC');
                    while($a = $articles->fetch()) { ?>
                        <div class="col-md-9">
                            <a href="<?= $link ?>/panel/edit/articles/<?= $a['id'] ?>" class="list-group-item">
                            <h4 class="list-group-item-heading"><?= $a['title'] ?></h4>
                            <p class="list-group-item-text"><?= $a['descr'] ?></p>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="<?= $link ?>/panel/delete/articles/<?= $a['id'] ?>" role="button" class="btn btn-danger btn-sm"><?= $l_delete ?></a>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <?php break;
            case 'pages':?>
            <title><?= $title ?>: <?= $l_panel?> - <?= $l_listpages?></title>
            <div class="container">
                <div class="center">
                    <h2><?= $l_listpages?></h2>
                </div>
                <div class="list-group">
                    <?php $pages = NULL;
                    $pages = $db->query('SELECT * FROM pages WHERE visible = 1 ORDER by id DESC');
                    while($p = $pages->fetch()) { ?>
                        <div class="col-md-9">
                            <a href="<?= $link ?>/panel/edit/pages/<?= $p['id'] ?>" class="list-group-item">
                                <h4 class="list-group-item-heading"><?= $p['title'] ?></h4>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="<?= $link ?>/panel/delete/pages/<?= $a['id'] ?>" role="button" class="btn btn-danger btn-sm"><?= $l_delete ?></a>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <?php break; } 
            }else{
                header("Location: /error/403");
            } 
        }else{
            header("Location: /login");
        }
include_once 'includes/footer.php';?>
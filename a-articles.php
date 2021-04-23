<?php 	
include_once 'includes/header.php';
include_once 'includes/a-menu.php';
if(isset($_SESSION['id'])){
    if($user['rank'] >= 1){ ?>
    <title><?= $title ?>: <?= $l_panel?> - <?= $l_listarticles?></title>
    <div class="container">
    <center><h2><?= $l_listarticles?></h2></center>
    <div class="list-group">
        <?php $articles = NULL;
        $articles = $db->query('SELECT * FROM articles ORDER by id DESC');
        while($a = $articles->fetch()) { ?>
        <div class="col-md-9">
            <a href="<?= $link ?>/panel/edit/articles/<?= $a['id'] ?>" class="list-group-item">
              <h4 class="list-group-item-heading"><?= $a['title'] ?></h4>
              <p class="list-group-item-text"><?= $a['descr'] ?></p>
            </a>
            </div>
            <div class="col-md-3">
            <a href="<?= $link ?>/panel/delete/articles/<?= $a['id'] ?>"><button type="button" class="btn btn-danger btn-block"><?= $l_delete ?></button></a>
            </div>
<?php } ?>
</div></div>
<?php }else{
    header("Location: /403");
} 
}else{
    header("Location: /login");
}
include_once 'includes/footer.php';?>
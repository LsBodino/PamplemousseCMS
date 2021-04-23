<?php 	
include_once 'includes/header.php';
include_once 'includes/a-menu.php';
if(isset($_SESSION['id'])){
    if($user['rank'] >= 1){ ?>
    <title><?= $title ?>: <?= $l_panel?> - <?= $l_listpages?></title>
    <div class="container">
    <center><h2><?= $l_listpages?></h2></center>
    <div class="list-group">
        <?php $pages = NULL;
        $pages = $db->query('SELECT * FROM pages ORDER by id DESC');
        while($p = $pages->fetch()) { ?>
        <div class="col-md-9">
            <a href="<?= $link ?>/panel/edit/pages/<?= $p['id'] ?>" class="list-group-item">
              <h4 class="list-group-item-heading"><?= $p['title'] ?></h4>
            </a>
            </div>
            <div class="col-md-3">
            <a href="<?= $link ?>/panel/delete/pages/<?= $p['id'] ?>"><button type="button" class="btn btn-danger btn-block"><?= $l_delete ?></button></a>
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
<head>
<?php include_once 'includes/header.php';
include_once "includes/menu.php";?>
<title><?= $title ?>: <?= $l_map ?></title>
</head>
<body>
    <div class="center">
        <h2><?= $l_map ?></h2>
        <a href="<?= $link ?>/index"><?= $l_homepage ?></a><br>
        <a href="<?= $link ?>/map"><?= $l_map ?></a><br>

        <h4><?= $l_pages ?></h4>
        <?php $pages = NULL;
        $pages = $db->query('SELECT * FROM pages WHERE visible = 1 ORDER by id DESC');
        while($p = $pages->fetch()) { ?>
            <a href="<?= $link?>/page/<?= $p['id'] ?>"><?= $p['title'] ?></a><br>
        <?php } ?>

        <?php if(isset($_SESSION['id'])) { ?>
            <?php if($user['rank'] >= 1){ ?>
                <h4><?= $l_panel ?></h4>
                <?php }if($user['rank'] == 2){ ?>
                    <a href="<?= $link ?>/panel/configuration"><?= $l_config ?></a><br>
                <?php } ?>
                <a href="<?= $link ?>/panel/create/articles"><?= $l_createarticle ?></a><br>
                <a href="<?= $link ?>/panel/create/pages"><?= $l_createpage ?></a><br>
                <a href="<?= $link ?>/panel/articles"><?= $l_listarticles ?></a><br>
                <a href="<?= $link ?>/panel/pages"><?= $l_listpages ?></a><br>
                    
                <h4><?= $l_space ?></h4>
                <a href="<?= $link ?>/space/<?= $_SESSION['id'] ?>"><?= $l_myspace ?></a><br>
                <a href="<?= $link ?>/settings"><?= $l_settings ?></a><br>
                <a href="<?= $link ?>/logout"><?= $l_logout ?></a><br>
                <?php }else{ ?>
                    <h4><?= $l_space ?></h4>
                    <a href="<?= $link ?>/login"><?= $l_login ?></a><br>
                    <a href="<?= $link ?>/register"><?= $l_register ?></a><br>
                <?php } ?>
            
    </div>
</body>
<?php include_once 'includes/footer.php';?>
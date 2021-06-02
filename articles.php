<?php
require_once 'includes/header.php';
require_once 'includes/menu.php';
$l_articles = $lg['l_articles'];
$smarty->assign("l_articles", $l_articles);

$l_noarticle = $lg['l_noarticle'];
$smarty->assign("l_noarticle", $l_noarticle);

$l_read = $lg['l_read'];
$smarty->assign("l_read", $l_read);

$articles = $db->prepare('SELECT * FROM articles WHERE visible = 1 ORDER by id DESC');
$articles->execute();
$nbarticles = $articles->rowcount();
$smarty->assign('nbarticles',$nbarticles);
$smarty->assign('articles',$articles);
$smarty->display("themes/$theme/articles.tpl");
require_once 'includes/footer.php';
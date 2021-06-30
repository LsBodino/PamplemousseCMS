<?php
require_once 'includes/header.php';
require_once 'includes/menu.php';

// Database call
$articles = $db->prepare('SELECT * FROM articles WHERE visible = 1 ORDER by id DESC');
$articles->execute();
$articles_nb = $articles->rowcount();
$smarty->assign('articles_nb',$articles_nb);
$smarty->assign('articles',$articles);

// Template call
$smarty->display("themes/$theme/articles.tpl");
require_once 'includes/footer.php';
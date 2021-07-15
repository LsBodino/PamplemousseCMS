<?php
require_once 'includes/header.php';
require_once 'includes/menu.php';

// Database
$articles_articles_req = $db->prepare('SELECT * FROM articles WHERE visible = 1 ORDER by id DESC');
$articles_articles_req->execute();
$articles_articles_nb = $articles_articles_req->rowcount();
$smarty->assign('articles_articles_nb',$articles_articles_nb);
$smarty->assign('articles_articles_req',$articles_articles_req);

// Template
$smarty->display("themes/$theme/articles.tpl");
require_once 'includes/footer.php';
<?php
require_once 'includes/header.php';
require_once 'includes/menu.php';

// Database
$homepage_articles_pin_req = $db->prepare('SELECT * FROM articles WHERE visible = 1 AND pin = 1 ORDER by id DESC LIMIT 4');
$homepage_articles_pin_req->execute();
$homepage_articles_nopin_req = $db->prepare('SELECT * FROM articles WHERE visible = 1 AND pin = 0 ORDER by id DESC LIMIT 8');
$homepage_articles_nopin_req->execute();
$homepage_articles_req = $db->prepare('SELECT * FROM articles WHERE visible = 1 ORDER by id DESC LIMIT 8');
$homepage_articles_req->execute();
$homepage_articles_nb = $homepage_articles_req->rowcount();
$smarty->assign('homepage_articles_req',$homepage_articles_req);
$smarty->assign('homepage_articles_pin_req',$homepage_articles_pin_req);
$smarty->assign('homepage_articles_nb', $homepage_articles_nb);
$smarty->assign('homepage_articles_nopin_req',$homepage_articles_nopin_req);

// Template
$smarty->display("themes/$theme/homepage.tpl");

require_once 'includes/footer.php';
?>
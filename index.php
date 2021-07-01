<?php
require_once 'includes/header.php';
require_once 'includes/menu.php';

// Database
$articles_pin = $db->prepare('SELECT * FROM articles WHERE visible = 1 AND pin = 1 ORDER by id DESC LIMIT 4');
$articles_pin->execute();
$articles_nopin = $db->prepare('SELECT * FROM articles WHERE visible = 1 AND pin = 0 ORDER by id DESC LIMIT 8');
$articles_nopin->execute();
$articles_pin_nb = $articles_pin->rowcount();
$articles_nopin_nb = $articles_nopin->rowcount();
$articles_nb = $articles_pin_nb + $articles_nopin_nb;
$smarty->assign('articles_pin',$articles_pin);
$smarty->assign('articles_nb', $articles_nb);
$smarty->assign('articles_nopin',$articles_nopin);

// Template
$smarty->display("themes/$theme/homepage.tpl");

require_once 'includes/footer.php';
?>
<?php
require_once 'includes/p-header.php';
require_once 'includes/p-menu.php';

// Database call
$articles = $db->prepare('SELECT * FROM articles WHERE visible = 1 ORDER by id DESC LIMIT 10');
$articles->execute();
$smarty->assign('articles',$articles);

$pages = $db->prepare('SELECT * FROM pages WHERE visible = 1 ORDER by id DESC LIMIT 10');
$pages->execute();
$smarty->assign('pages',$pages);

$users = $db->prepare('SELECT * FROM users ORDER by id DESC LIMIT 10');
$users->execute();
$smarty->assign('users',$users);

// Template call
if(isset($_SESSION['id'])) {
    if($rank['p_panelaccess'] == 1){
        $smarty->display("themes/$paneltheme/p-index.tpl");
    }else{
        $smarty->display("themes/$theme/error401.tpl");
    }
}else{
    header("Location: $link/login");
}

require_once 'includes/p-footer.php'; ?>
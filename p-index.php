<?php
require_once 'includes/p-header.php';
require_once 'includes/p-menu.php';

// Database
$homepage_articles_req = $db->prepare('SELECT * FROM articles WHERE visible = 1 ORDER by id DESC LIMIT 10');
$homepage_articles_req->execute();
$smarty->assign('homepage_articles_req',$homepage_articles_req);

$homepage_pages_req = $db->prepare('SELECT * FROM pages WHERE visible = 1 ORDER by id DESC LIMIT 10');
$homepage_pages_req->execute();
$smarty->assign('homepage_pages_req',$homepage_pages_req);

$homepage_users_req = $db->prepare('SELECT * FROM users ORDER by id DESC LIMIT 10');
$homepage_users_req->execute();
$smarty->assign('homepage_users_req',$homepage_users_req);

if(isset($_SESSION['id'])) {
    if($rank['p_panelaccess'] == 1){
        // Template
        $smarty->display("themes/$paneltheme/p-index.tpl");
    }else{
        // Error 401
        $smarty->display("themes/$theme/error401.tpl");
    }
}else{
    // Login
    header("Location: $link/login");
}

require_once 'includes/p-footer.php'; ?>
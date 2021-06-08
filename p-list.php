<?php 	
require_once 'includes/header.php';
require_once 'includes/p-menu.php';
$l_ban = $lg['l_ban'];
$smarty->assign("l_ban", $l_ban);

$l_banned = $lg['l_banned'];
$smarty->assign("l_banned", $l_banned);

$l_delete = $lg['l_delete'];
$smarty->assign("l_delete", $l_delete);

$l_id = $lg['l_id'];
$smarty->assign("l_id", $l_id);

$l_listarticles = $lg['l_listarticles'];
$smarty->assign("l_listarticles", $l_listarticles);

$l_listpages = $lg['l_listpages'];
$smarty->assign("l_listpages", $l_listpages);

$l_listusers = $lg['l_listusers'];
$smarty->assign("l_listusers", $l_listusers);

$l_noarticle = $lg['l_noarticle'];
$smarty->assign("l_noarticle", $l_noarticle);

$l_nopage = $lg['l_nopage'];
$smarty->assign("l_nopage", $l_nopage);

$l_read = $lg['l_read'];
$smarty->assign("l_read", $l_read);

$l_unban = $lg['l_unban'];
$smarty->assign("l_unban", $l_unban);

if(isset($_SESSION['id'])){
    if($user['rank'] >= 1){ 
        switch($_GET['type'])
        {
            default:
            header("Location: $link/error/405");
            break;
            case 'articles':
                $articles = $db->prepare('SELECT * FROM articles WHERE visible = 1 ORDER by id DESC');
                $articles->execute();
                $nbarticles = $articles->rowcount();
                $smarty->assign('nbarticles',$nbarticles);
                $smarty->assign('articles',$articles);
                $smarty->display("themes/$theme/p-listarticles.tpl");
            break;
            case 'pages':
                $pages = $db->prepare('SELECT * FROM pages WHERE visible = 1 ORDER by id DESC');
                $pages->execute();
                $nbpages = $pages->rowcount();
                $smarty->assign('nbpages',$nbpages);
                $smarty->assign('pages',$pages);
                $smarty->display("themes/$theme/p-listpages.tpl");
            break;
            case 'users':
                $users = $db->prepare('SELECT * FROM users ORDER by id DESC');
                $users->execute();
                $smarty->assign('users',$users);
                $smarty->display("themes/$theme/p-listusers.tpl");
            break;
        } 
    }else{
        header("Location: $link/error/403");
    } 
}else{
    header("Location: $link/login");
}
require_once 'includes/footer.php';?>
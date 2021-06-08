<?php 	
require_once 'includes/header.php';
require_once 'includes/p-menu.php';

$l_id = $lg['l_id'];
$smarty->assign("l_id", $l_id);

$l_listarticles = $lg['l_listarticles'];
$smarty->assign("l_listarticles", $l_listarticles);

$l_listpages = $lg['l_listpages'];
$smarty->assign("l_listpages", $l_listpages);

$l_noarticle = $lg['l_noarticle'];
$smarty->assign("l_noarticle", $l_noarticle);

$l_nopage = $lg['l_nopage'];
$smarty->assign("l_nopage", $l_nopage);

$l_recover = $lg['l_recover'];
$smarty->assign("l_recover", $l_recover);

$l_trash = $lg['l_trash'];
$smarty->assign("l_trash", $l_trash);

if(isset($_SESSION['id'])){
    if($user['rank'] >= 1){ 
        switch($_GET['type'])
        {
            default:
                header("Location: $link/error/405");
            break;
            case 'articles':
                $articles = $db->prepare('SELECT * FROM articles WHERE visible = 0 ORDER by id DESC');
                $articles->execute();
                $nbarticles = $articles->rowcount();
                $smarty->assign('nbarticles',$nbarticles);
                $smarty->assign('articles',$articles);
                $smarty->display("themes/$theme/p-trasharticles.tpl");
            break;
            case 'pages':
                $pages = $db->prepare('SELECT * FROM pages WHERE visible = 0 ORDER by id DESC');
                $pages->execute();
                $nbpages = $pages->rowcount();
                $smarty->assign('nbpages',$nbpages);
                $smarty->assign('pages',$pages);
                $smarty->display("themes/$theme/p-trashpages.tpl");
            break;
        } 
    }else{
        header("Location: $link/error/403");
    } 
}else{
    header("Location: $link/login");
}
require_once 'includes/footer.php';?>
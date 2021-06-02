<?php 	
require_once 'includes/header.php';
require_once 'includes/p-menu.php';
$l_delete = $lg['l_delete'];
$smarty->assign("l_delete", $l_delete);

$l_listarticles = $lg['l_listarticles'];
$smarty->assign("l_listarticles", $l_listarticles);

$l_listpages = $lg['l_listpages'];
$smarty->assign("l_listpages", $l_listpages);

$l_noarticle = $lg['l_noarticle'];
$smarty->assign("l_noarticle", $l_noarticle);

$l_nopage = $lg['l_nopage'];
$smarty->assign("l_nopage", $l_nopage);

if(isset($_SESSION['id'])){
    if($user['rank'] >= 1){ 
        switch($_GET['type'])
        {
            default:
            header("Location: /error/405");
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
        } 
    }else{
        header("Location: /error/403");
    } 
}else{
    header("Location: /login");
}
require_once 'includes/footer.php';?>
<?php
require_once 'includes/p-header.php';
require_once 'includes/p-menu.php';

// Switch
if(isset($_SESSION['id'])){
    if($user['rank'] >= 1){
        switch($_GET['type'])
        {
            default:
                $smarty->display("themes/$theme/error405.tpl");
            break;

// Articles
            case 'articles':
                $articles = $db->prepare('SELECT * FROM articles WHERE visible = 0 ORDER by id DESC');
                $articles->execute();
                $articles_nb = $articles->rowcount();
                $smarty->assign('articles_nb',$articles_nb);
                $smarty->assign('articles',$articles);
                $smarty->display("themes/$paneltheme/p-trasharticles.tpl");
            break;

// Pages
            case 'pages':
                $pages = $db->prepare('SELECT * FROM pages WHERE visible = 0 ORDER by id DESC');
                $pages->execute();
                $pages_nb = $pages->rowcount();
                $smarty->assign('pages_nb',$pages_nb);
                $smarty->assign('pages',$pages);
                $smarty->display("themes/$paneltheme/p-trashpages.tpl");
            break;
        }
    }else{
        $smarty->display("themes/$theme/error401.tpl");
    }
}else{
    header("Location: $link/login");
}
require_once 'includes/p-footer.php';?>
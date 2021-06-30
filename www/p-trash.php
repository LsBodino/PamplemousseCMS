<?php
require_once 'includes/p-header.php';
require_once 'includes/p-menu.php';

// Switch
if(isset($_SESSION['id'])){
    switch($_GET['type'])
    {
        default:
            $smarty->display("themes/$theme/error405.tpl");
        break;

        // Articles
        case 'articles':
            if($rank['p_articles'] == 1){
                $articles = $db->prepare('SELECT * FROM articles WHERE visible = 0 ORDER by id DESC');
                $articles->execute();
                $articles_nb = $articles->rowcount();
                $smarty->assign('articles_nb',$articles_nb);
                $smarty->assign('articles',$articles);
                $smarty->display("themes/$paneltheme/p-trasharticles.tpl");
            }else{
                $smarty->display("themes/$theme/error401.tpl");
            }
        break;

        // Pages
        case 'pages':
            if($rank['p_pages'] == 1){
                $pages = $db->prepare('SELECT * FROM pages WHERE visible = 0 ORDER by id DESC');
                $pages->execute();
                $pages_nb = $pages->rowcount();
                $smarty->assign('pages_nb',$pages_nb);
                $smarty->assign('pages',$pages);
                $smarty->display("themes/$paneltheme/p-trashpages.tpl");
            }else{
                $smarty->display("themes/$theme/error401.tpl");
            }
        break;
    }
}else{
    header("Location: $link/login");
}
require_once 'includes/p-footer.php';?>
<?php
require_once 'includes/p-header.php';
require_once 'includes/p-menu.php';

// Switch
if(isset($_SESSION['id'])){
    if($user['rank'] >= 1){
        switch($_GET['type'])
        {
            default:
                header("Location: $link/error/405");
            break;

            // Articles
            case 'articles':
                $articles = $db->prepare('SELECT * FROM articles WHERE visible = 1 ORDER by id DESC');
                $articles->execute();
                $articles_nb = $articles->rowcount();
                $smarty->assign('articles_nb',$articles_nb);
                $smarty->assign('articles',$articles);
                $smarty->display("themes/$paneltheme/p-listarticles.tpl");
            break;

            // Categories
            case 'categories':
                $categories = $db->prepare('SELECT * FROM articles_categories WHERE visible = 1 ORDER by id DESC');
                $categories->execute();
                $categories_nb = $categories->rowcount();
                $smarty->assign('categories_nb',$categories_nb);
                $smarty->assign('categories',$categories);
                $smarty->display("themes/$paneltheme/p-listcategories.tpl");
            break;

            // Pages
            case 'pages':
                $pages = $db->prepare('SELECT * FROM pages WHERE visible = 1 ORDER by id DESC');
                $pages->execute();
                $pages_nb = $pages->rowcount();
                $smarty->assign('pages_nb',$pages_nb);
                $smarty->assign('pages',$pages);
                $smarty->display("themes/$paneltheme/p-listpages.tpl");
            break;

            // Users
            case 'users':
                $users = $db->prepare('SELECT * FROM users ORDER by id DESC');
                $users->execute();
                $smarty->assign('users',$users);
                $smarty->display("themes/$paneltheme/p-listusers.tpl");
            break;
        } 
    }else{
        header("Location: $link/error/403");
    } 
}else{
    header("Location: $link/login");
}
require_once 'includes/p-footer.php';?>
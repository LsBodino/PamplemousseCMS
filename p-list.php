<?php
require_once 'includes/p-header.php';
require_once 'includes/p-menu.php';

// Switch
if(isset($_SESSION['id'])){
    switch($_GET['type'])
    {
        default:
        // Error default
            $smarty->display("themes/$theme/error405.tpl");
        break;

        // Articles
        case 'articles':
            if($rank['p_articles'] == 1){
                $articles = $db->prepare('SELECT * FROM articles WHERE visible = 1 ORDER by id DESC');
                $articles->execute();
                $articles_nb = $articles->rowcount();
                $smarty->assign('articles_nb',$articles_nb);
                $smarty->assign('articles',$articles);
                $smarty->display("themes/$paneltheme/p-listarticles.tpl");
            }else{
                // Error
                $smarty->display("themes/$theme/error401.tpl");
            }
        break;

        // Categories
        case 'categories':
            if($rank['p_categories'] == 1){
                $categories = $db->prepare('SELECT * FROM articles_categories WHERE visible = 1 ORDER by id DESC');
                $categories->execute();
                $categories_nb = $categories->rowcount();
                $smarty->assign('categories_nb',$categories_nb);
                $smarty->assign('categories',$categories);
                $smarty->display("themes/$paneltheme/p-listcategories.tpl");
            }else{
                // Error
                $smarty->display("themes/$theme/error401.tpl");
            }
        break;

        // Pages
        case 'pages':
            if($rank['p_pages'] == 1){
                $pages = $db->prepare('SELECT * FROM pages WHERE visible = 1 ORDER by id DESC');
                $pages->execute();
                $pages_nb = $pages->rowcount();
                $smarty->assign('pages_nb',$pages_nb);
                $smarty->assign('pages',$pages);
                $smarty->display("themes/$paneltheme/p-listpages.tpl");
            }else{
                // Error
                $smarty->display("themes/$theme/error401.tpl");
            }
        break;

        // Ranks
        case 'ranks':
            if($rank['p_ranks'] == 1){
                $ranks = $db->prepare('SELECT * FROM users_ranks ORDER by id DESC');
                $ranks->execute();
                $smarty->assign('ranks',$ranks);
                $smarty->display("themes/$paneltheme/p-listranks.tpl");
            }else{
                // Error
                $smarty->display("themes/$theme/error401.tpl");
            }
        break;

        // Users
        case 'users':
            if($rank['p_users'] == 1){
                $users = $db->prepare('SELECT * FROM users ORDER by id DESC');
                $users->execute();
                $smarty->assign('users',$users);
                $rank_req = $db->prepare("SELECT * FROM users_ranks WHERE id = ?");
                $rank_req->execute(array($user['rank']));
                $smarty->assign('rank_req', $rank_req);
                $smarty->display("themes/$paneltheme/p-listusers.tpl");
            }else{
                // Error
                $smarty->display("themes/$theme/error401.tpl");
            }
        break;
    } 
}else{
    // Login
    header("Location: $link/login");
}
require_once 'includes/p-footer.php';?>
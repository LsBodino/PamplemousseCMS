<?php
require_once 'includes/p-header.php';
require_once 'includes/p-menu.php';

// Switch
if(isset($_SESSION['id'])){
    switch($_GET['type'])
    {
        default:
        // Error 405
            $smarty->display("themes/$theme/error405.tpl");
        break;

        // Articles
        case 'articles':
            if($rank['p_articles'] == 1){
                $list_articles_req = $db->prepare('SELECT * FROM articles WHERE visible = 1 ORDER by id DESC');
                $list_articles_req->execute();
                $list_articles_nb = $list_articles_req->rowcount();
                $smarty->assign('list_articles_nb',$list_articles_nb);
                $smarty->assign('list_articles_req',$list_articles_req);
                $smarty->display("themes/$paneltheme/p-listarticles.tpl");
            }else{
                // Error 401
                $smarty->display("themes/$theme/error401.tpl");
            }
        break;

        // Categories
        case 'categories':
            if($rank['p_categories'] == 1){
                $list_categories_req = $db->prepare('SELECT * FROM articles_categories WHERE visible = 1 ORDER by id DESC');
                $list_categories_req->execute();
                $list_categories_nb = $list_categories_req->rowcount();
                $smarty->assign('list_categories_nb',$list_categories_nb);
                $smarty->assign('list_categories_req',$list_categories_req);
                $smarty->display("themes/$paneltheme/p-listcategories.tpl");
            }else{
                // Error 401
                $smarty->display("themes/$theme/error401.tpl");
            }
        break;

        // Pages
        case 'pages':
            if($rank['p_pages'] == 1){
                $list_pages_req = $db->prepare('SELECT * FROM pages WHERE visible = 1 ORDER by id DESC');
                $list_pages_req->execute();
                $list_pages_nb = $list_pages_req->rowcount();
                $smarty->assign('list_pages_nb',$list_pages_nb);
                $smarty->assign('list_pages_req',$list_pages_req);
                $smarty->display("themes/$paneltheme/p-listpages.tpl");
            }else{
                // Error 401
                $smarty->display("themes/$theme/error401.tpl");
            }
        break;

        // Ranks
        case 'ranks':
            if($rank['p_ranks'] == 1){
                $list_ranks_req = $db->prepare('SELECT * FROM users_ranks ORDER by id DESC');
                $list_ranks_req->execute();
                $smarty->assign('list_ranks_req',$list_ranks_req);
                $smarty->display("themes/$paneltheme/p-listranks.tpl");
            }else{
                // Error 401
                $smarty->display("themes/$theme/error401.tpl");
            }
        break;

        // Users
        case 'users':
            if($rank['p_users'] == 1){
                $list_users_req = $db->prepare('SELECT * FROM users ORDER by id DESC');
                $list_users_req->execute();
                $smarty->assign('list_users_req',$list_users_req);
                $smarty->display("themes/$paneltheme/p-listusers.tpl");
            }else{
                // Error 401
                $smarty->display("themes/$theme/error401.tpl");
            }
        break;
    } 
}else{
    // Login
    header("Location: $link/login");
}
require_once 'includes/p-footer.php';?>
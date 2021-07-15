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
                $trash_articles_req = $db->prepare('SELECT * FROM articles WHERE visible = 0 ORDER by id DESC');
                $trash_articles_req->execute();
                $trash_articles_nb = $trash_articles_req->rowcount();
                $smarty->assign('trash_articles_nb',$trash_articles_nb);
                $smarty->assign('trash_articles_req',$trash_articles_req);
                $smarty->display("themes/$paneltheme/p-trasharticles.tpl");
            }else{
                // Error 401
                $smarty->display("themes/$theme/error401.tpl");
            }
        break;

        // Pages
        case 'pages':
            if($rank['p_pages'] == 1){
                $trash_pages_req = $db->prepare('SELECT * FROM pages WHERE visible = 0 ORDER by id DESC');
                $trash_pages_req->execute();
                $trash_pages_nb = $trash_pages_req->rowcount();
                $smarty->assign('trash_pages_nb',$trash_pages_nb);
                $smarty->assign('trash_pages_req',$trash_pages_req);
                $smarty->display("themes/$paneltheme/p-trashpages.tpl");
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
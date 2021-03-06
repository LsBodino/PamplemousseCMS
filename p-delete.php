<?php
require_once 'includes/p-header.php';

// Switch
if(isset($_SESSION['id'])){
    if(isset($_GET['id']) AND !empty($_GET['id'])){
        switch($_GET['type']){
            default:
                // Error 405
                $smarty->display("themes/$theme/error405.tpl");
            break;

            // Articles
            case 'articles':
                if($rank['p_articles'] == 1){
                    $article_id = htmlspecialchars($_GET['id']);
                    $article = $db->prepare('UPDATE articles SET visible = 0 WHERE id = ?');
                    $article->execute(array($article_id));
                    header("Location: $link/panel/articles");
                }else{
                    // Error 401
                    $smarty->display("themes/$theme/error401.tpl");
                }
            break;

            // Categories
            case 'categories':
                if($rank['p_categories'] == 1){
                    $category_id = htmlspecialchars($_GET['id']);
                    $category = $db->prepare('UPDATE articles_categories SET visible = 0 WHERE id = ?');
                    $category->execute(array($category_id));
                    header("Location: $link/panel/categories/articles/");
                }else{
                    // Error 401
                    $smarty->display("themes/$theme/error401.tpl");
                }
            break;
            
            // Pages
            case 'pages':
                if($rank['p_pages'] == 1){
                    $page_id = htmlspecialchars($_GET['id']);
                    $page = $db->prepare('UPDATE pages SET visible = 0 WHERE id = ?');
                    $page->execute(array($page_id));
                    header("Location: $link/panel/pages");
                }else{
                    // Error 401
                    $smarty->display("themes/$theme/error401.tpl");
                }
            break;

            // Users
            case 'users':
                if($rank['p_users'] == 1){
                    $user_id = htmlspecialchars($_GET['id']);
                    $user = $db->prepare('UPDATE users SET ban = 1 WHERE id = ?');
                    $user->execute(array($user_id));
                    header("Location: $link/panel/users");
                }else{
                    // Error 401
                    $smarty->display("themes/$theme/error401.tpl");
                }
            break;
        }
    }
}else{
    header("Location: $link/login");
}
?>
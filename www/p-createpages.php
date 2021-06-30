<?php
require_once 'includes/p-header.php';
require_once 'includes/p-menu.php';

// Database call
if(isset($_SESSION['id'])){
    if($rank['p_pages'] == 1){
        if(isset($_POST['page_title'], $_POST['page_section'])){
            if(!empty($_POST['page_title']) AND !empty($_POST['page_section'])){
                $page_title = htmlspecialchars($_POST['page_title']);
                $page_section = $_POST['page_section'];
                $page_menu = $_POST['page_menu'];
                $page_insert = $db->prepare("INSERT INTO pages (title, section, datep, author, menu, visible) VALUES (?, ?, ?, ?, ?, ?)");
                $page_insert->execute(array($page_title, $page_section, time(), $_SESSION['username'], $page_menu, 1));
                $smarty->assign('success',$l_pageposted);
            }
        }
        // Template call
        $smarty->display("themes/$paneltheme/p-createpages.tpl");
    }else{
        $smarty->display("themes/$theme/error401.tpl");
    }
}else{
   header("Location: $link/login");
}

require_once 'includes/p-footer.php';?>

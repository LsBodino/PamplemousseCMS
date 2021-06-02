<?php
require_once 'includes/header.php';
require_once 'includes/p-menu.php';
$l_pageposted = $lg['l_pageposted'];
$smarty->assign("l_pageposted", $l_pageposted);

$l_createpage = $lg['l_createpage'];
$smarty->assign("l_createpage", $l_createpage);

$l_name = $lg['l_name'];
$smarty->assign("l_name", $l_name);

$l_no = $lg['l_no'];
$smarty->assign("l_no", $l_no);

$l_pagemenu = $lg['l_pagemenu'];
$smarty->assign("l_pagemenu", $l_pagemenu);

$l_panel = $lg['l_panel'];
$smarty->assign("l_panel", $l_panel);

$l_publish = $lg['l_publish'];
$smarty->assign("l_publish", $l_publish);

$l_section = $lg['l_section'];
$smarty->assign("l_section", $l_section);

$l_yes = $lg['l_yes'];
$smarty->assign("l_yes", $l_yes);

if(isset($_SESSION['id'])){
   if($user['rank'] >= 1){
       if(isset($_POST['page_title'], $_POST['page_section'])) {
           if(!empty($_POST['page_title']) AND !empty($_POST['page_section'])) {
               $page_title = htmlspecialchars($_POST['page_title']);
               $page_section = $_POST['page_section'];
               $page_menu = $_POST['page_menu'];
               $ins = $db->prepare("INSERT INTO pages (title, section, datep, author, menu, visible) VALUES (?, ?, ?, ?, ?, ?)");
               $ins->execute(array($page_title, $page_section, time(), $_SESSION['username'], $page_menu, 1));
               $smarty->assign('success',$l_pageposted);
           }
       }
   }else{
       header("Location: /error/403");
   }
}else{
   header("Location: /login");
}
$smarty->display("themes/$theme/p-createpages.tpl");
require_once 'includes/footer.php';?>

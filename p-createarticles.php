<?php
require_once 'includes/header.php';
require_once 'includes/p-menu.php';
$l_articlepin = $lg['l_articlepin'];
$smarty->assign("l_articlepin", $l_articlepin);

$l_articleposted = $lg['l_articleposted'];
$smarty->assign("l_articleposted", $l_articleposted);

$l_createarticle = $lg['l_createarticle'];
$smarty->assign("l_createarticle", $l_createarticle);

$l_descr = $lg['l_descr'];
$smarty->assign("l_descr", $l_descr);

$l_image = $lg['l_image'];
$smarty->assign("l_image", $l_image);

$l_name = $lg['l_name'];
$smarty->assign("l_name", $l_name);

$l_no = $lg['l_no'];
$smarty->assign("l_no", $l_no);

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
      if(isset($_POST['article_title'], $_POST['article_section'])) {
         if(!empty($_POST['article_title']) AND !empty($_POST['article_section'])) {
            $article_title = htmlspecialchars($_POST['article_title']);
            $article_descr = htmlspecialchars($_POST['article_descr']);
            $article_img = $_POST['article_img'];
            $article_section = $_POST['article_section'];
            $article_pin = $_POST['article_pin'];
            $ins = $db->prepare("INSERT INTO articles (title, descr, img, section, pin, datep, author, visible) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
            $ins->execute(array($article_title, $article_descr, $article_img, $article_section, $article_pin, time(), $_SESSION['username'], 1));
            $smarty->assign('success',$l_articleposted);
         }
      }
   }else{
       header("Location: /error/403");
   }
}else{
   header("Location: /login");
}
$smarty->display("themes/$theme/p-createarticles.tpl");
require_once 'includes/footer.php';?>
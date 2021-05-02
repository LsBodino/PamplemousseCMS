<?php
if(isset($_SESSION['id'])){
    if($user['rank'] >= 1){
    if(isset($_POST['page_title'], $_POST['page_section'])) {
    if(!empty($_POST['page_title']) AND !empty($_POST['page_section'])) {
       $page_title = htmlspecialchars($_POST['page_title']);
       $page_section = $_POST['page_section'];
       $ins = $db->prepare('INSERT INTO pages (title, section, datep, visible) VALUES (?, ?, NOW(), ?)');
       $ins->execute(array($page_title, $page_section, 1));
       $message = "$l_pageposted.";
            }
        }
    }else{
        header("Location: /error/403");
    }
    }else{
        header("Location: /login");
}
?>